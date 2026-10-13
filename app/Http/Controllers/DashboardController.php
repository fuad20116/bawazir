<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function user(): View|RedirectResponse
    {
        if (auth()->user()->isAdmin()) {
            return redirect()->route('admin.dashboard');
        }

        return view('dashboard.user', [
            'courses' => Course::where('is_published', true)->orderBy('created_at')->get(),
            'courseCount' => Course::where('is_published', true)->count(),
        ]);
    }

    public function admin(): View
    {
        return view('dashboard.admin', [
            'users' => User::where('role', 'user')->latest()->take(6)->get(),
            'userCount' => User::where('role', 'user')->count(),
            'courseCount' => Course::count(),
            'publishedCount' => Course::where('is_published', true)->count(),
            'courses' => Course::latest()->take(5)->get(),
        ]);
    }
}
