<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function usersIndex()
    {
        $users = User::all();
        return view('admin.users.index', ['users' => $users]);
    }
}
