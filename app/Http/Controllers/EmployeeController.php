<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $conferences = Conference::orderBy('date', 'asc')->get();

        return view('employee.index', compact('conferences'));
    }

    public function show($id)
    {
        $conference = Conference::with('users')->findOrFail($id); // Užkrauname konferenciją su dalyviais
        return view('employee.show', ['conference' => $conference]);
    }
}
