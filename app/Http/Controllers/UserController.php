<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getProfile(Request $request)
    {
        $user = User::with('profile')->find($request->id);
        return view('user-profile', compact('user'));
    }

    public function getCourses(Request $request)
    {
        $user = User::with('courses')->find($request->id);
        $user->courses()->sync([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        return view('user-courses', compact('user'));
    }
}
