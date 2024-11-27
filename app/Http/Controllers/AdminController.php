<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    protected $users = [
        [
            'id' => 1,
            'first_name' => 'Lukas',
            'last_name' => 'Zukauskas',
            'email' => 'lukas.zukauskas@gmail.com',
        ],
        [
            'id' => 2,
            'first_name' => 'Mantas',
            'last_name' => 'Mantaitis',
            'email' => 'mantas.mantaitis@gmail.com',
        ],
    ];

    public function index()
    {
        return view('admin.index');
    }

    // Naudotojų sąrašas

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function usersIndex()
    {
        $users = $this->users;
        return view('admin.users.index', ['users' => $users]);
    }

    public function editUser($id)
    {
        $user = collect($this->users)->firstWhere('id', $id);
        return view('admin.users.edit', ['user' => $user]);
    }

}
