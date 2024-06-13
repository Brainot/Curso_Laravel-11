<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        // dd(User::all());
        return view('admin.users.index', [
           'users' => User::all(),
        ]);
    }
}
