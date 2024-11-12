<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function getAllUsers()
    {
        $users = User::with('profile')->get();
        return view('users', compact('users'));
    }
}
