<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class AdminConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all(); // Paimame visas konferencijas iš DB
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        Conference::create($request->all()); // Išsaugome naują konferenciją

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija sėkmingai sukurta.');
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);
        return view('admin.conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
        ]);

        $conference = Conference::findOrFail($id);
        $conference->update($request->all());

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija atnaujinta.');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        return redirect()->route('admin.conferences.index')->with('success', 'Konferencija ištrinta.');
    }

}
