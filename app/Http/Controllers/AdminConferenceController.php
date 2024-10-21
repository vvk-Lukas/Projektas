<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConferenceController extends Controller
{
    protected $conferences = [
        [
            'id' => 1,
            'name' => 'Konferencija 1',
            'description' => 'Aprašymas 1',
            'date' => '2024-10-25',
            'status' => 'planuojama',
            ],

        [
            'id' => 2,
            'name' => 'Konferencija 2',
            'description' => 'Aprašymas 2',
            'date' => '2024-10-01',
            'status' => 'ivykusi',
            ]
    ];

    public function index()
    {
        return view('admin.conferences.index', ['conferences' => $this->conferences]);
    }

    public function editConference($id)
    {
        $conferences = collect($this->conferences)->firstWhere('id', $id); // Randame naudotoją pagal ID
        return view('admin.conferences.edit', ['conference' => $conferences]);
    }

    public function create()
    {
        return view('admin.conferences.create');
    }

}
