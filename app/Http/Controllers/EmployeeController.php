<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $conferences = [
            [
                'id' => 1,
                'name' => 'Konferencija 1',
                'date' => '2019-01-10',
            ],
            [
                'id' => 2,
                'name' => 'Konferencija 2',
                'date' => '2019-01-10',
            ],
        ];
        return view('employee.index',['conferences' => $conferences]);
    }

    public function show($id) {
        $conferences = [
            [
                'id' => 1,
                'name' => 'Konferencija 1',
                'title' => 'Konferencija vyks 16:00, bus kalbama apie github.',
                'date' => '2024-11-10',
                'attendees' => [
                    'Jonas',
                    'Ona',
                    'Petras'
                ],
            ],
            [
                'id' => 2,
                'name' => 'Konferencija 2',
                'title' => 'Konferencija vyks 18:00, bus kalbama apie laravel.',
                'date' => '2024-11-22',
                'attendees' => [
                    'Jonas',
                    'Ona',
                    'Petras'
                ],
            ],
        ];

        $conference = collect($conferences)->firstWhere('id', $id);


        return view('employee.show',['conference' => $conference]);
    }
}
