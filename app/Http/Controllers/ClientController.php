<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function index()
    {
        // Paimame konferencijas iš duomenų bazės
        $conferences = Conference::where('status', 'planuojama')
            ->orWhere('status', 'vykdoma')
            ->orderBy('date', 'asc')
            ->get();

        return view('client.index', compact('conferences'));
    }

    public function show($id)
    {
        // Rasti konkrečią konferenciją pagal ID
        $conference = Conference::with('attendees')->findOrFail($id);

        return view('client.show', compact('conference'));
    }

    public function register($id)
    {
        $user = Auth::user(); // Dabartinis prisijungęs vartotojas
        $conference = Conference::findOrFail($id); // Patikriname, ar konferencija egzistuoja

        // Patikriname, ar vartotojas jau užsiregistravo
        if ($conference->users()->where('user_id', $user->id)->exists()) {
            return redirect()->route('client.show', $id)
                ->with('error', 'Jūs jau esate užsiregistravęs į šią konferenciją.');
        }

        // Pridedame vartotoją prie konferencijos
        $conference->users()->attach($user->id);

        return redirect()->route('client.show', $id)
            ->with('success', 'Sėkmingai užsiregistravote į konferenciją.');
    }
}
