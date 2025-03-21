<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return inertia('Admin/Dashboard', [
            'usersCount' => User::count(),
            'recentUsers' => User::latest()->take(5)->get(),
        ]);
    }
}
