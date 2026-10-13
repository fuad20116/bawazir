<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class AuthFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pages_are_available(): void
    {
        $this->get('/')->assertOk()->assertSee('Langkah kecil hari ini');
        $this->get('/login')->assertOk()->assertSee('Masuk ke akunmu');
        $this->get('/register')->assertOk()->assertSee('Buat akun gratis');
    }

    public function test_registration_creates_a_regular_user_and_opens_dashboard(): void
    {
        $response = $this->post('/register', [
            'name' => 'Rina Pembelajar',
            'email' => 'rina@example.com',
            'password' => 'password-123',
            'password_confirmation' => 'password-123',
            'role' => 'admin',
        ]);

        $response->assertRedirect(route('dashboard'));
        $this->assertAuthenticated();
        $this->assertDatabaseHas('users', [
            'email' => 'rina@example.com',
            'role' => 'user',
        ]);
        $this->get(route('dashboard'))->assertOk()->assertSee('Rina');
    }

    public function test_database_seeder_creates_admin_and_sample_courses(): void
    {
        $this->seed();

        $this->assertDatabaseHas('users', [
            'email' => env('KELASQU_ADMIN_EMAIL', 'admin@kelasqu.test'),
            'role' => 'admin',
        ]);
        $this->assertDatabaseCount('courses', 4);
    }

    public function test_admin_login_opens_admin_dashboard(): void
    {
        $admin = User::create([
            'name' => 'Admin Kelasqu',
            'email' => 'admin@example.com',
            'password' => Hash::make('password-123'),
        ]);
        $admin->forceFill(['role' => 'admin'])->save();

        $this->post('/login', [
            'email' => 'admin@example.com',
            'password' => 'password-123',
        ])->assertRedirect(route('admin.dashboard'));

        $this->get(route('admin.dashboard'))->assertOk()->assertSee('PANEL ADMINISTRATOR');
    }

    public function test_regular_user_cannot_open_admin_dashboard(): void
    {
        $user = User::create([
            'name' => 'Pembelajar',
            'email' => 'user@example.com',
            'password' => Hash::make('password-123'),
        ]);

        $this->actingAs($user)
            ->get(route('admin.dashboard'))
            ->assertRedirect(route('dashboard'))
            ->assertSessionHas('error');
    }

    public function test_logout_ends_the_session(): void
    {
        $user = User::create([
            'name' => 'Pembelajar',
            'email' => 'user@example.com',
            'password' => Hash::make('password-123'),
        ]);

        $this->actingAs($user)
            ->post('/logout')
            ->assertRedirect(route('login'));

        $this->assertGuest();
    }
}
