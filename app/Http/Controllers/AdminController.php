<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Naudotojų sąrašas (statinis masyvas)
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

    // Pagrindinis administratoriaus puslapis
    public function index()
    {
        return view('admin.index');
    }

    // Naudotojų sąrašas
    public function usersIndex()
    {
        $users = $this->users; // Naudojame statinį masyvą
        return view('admin.users.index', ['users' => $users]);
    }

    // Redagavimo puslapis
    public function editUser($id)
    {
        $user = collect($this->users)->firstWhere('id', $id); // Randame naudotoją pagal ID
        return view('admin.users.edit', ['user' => $user]);
    }

}
