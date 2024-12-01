<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function usersIndex()
    {
        $users = User::all();  // Paima visus naudotojus iš duomenų bazės
        return view('admin.users.index', ['users' => $users]);
    }

    // Šis metodas grąžins naudotoją, kurį reikia redaguoti
    public function editUser($id)
    {
        $user = User::find($id);  // Paieška pagal ID
        if (!$user) {
            return redirect()->route('admin.users.index')->with('error', 'Naudotojas nerastas');
        }
        return view('admin.users.edit', ['user' => $user]);
    }

    // Šis metodas apdoros duomenis, kai naudotojas bus atnaujinamas
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);  // Paieška pagal ID
        if (!$user) {
            return redirect()->route('admin.users.index')->with('error', 'Naudotojas nerastas');
        }

        // Validacija
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',  // Slaptažodis yra neprivalomas, jei nesikeičia
        ]);

        // Atnaujinimas
        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if ($request->has('password')) {
            $user->password = bcrypt($request->input('password'));  // Slaptažodis, jei jis buvo pakeistas
        }

        $user->save();  // Išsaugome pakeitimus

        return redirect()->route('admin.users.index')->with('success', 'Naudotojas sėkmingai atnaujintas');
    }

}
