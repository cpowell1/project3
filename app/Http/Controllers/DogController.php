<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function results(Request $request)
    {
        return view('home')->with([
            'petName' => $request->session()->get('petName', ''),
            'size' => $request->session()->get('size', ''),
            'petAge' => $request->session()->get('petAge', false),
            'results' => $request->session()->get('results'),
        ]);
    }

    public function infoProcess(Request $request)
    {
        $request->validate([
            'petName' => 'required|alpha',
            'size' => 'required',
            'petAge' => 'required',
        ]);

        $petName = $request->input('petName', '');
        $size = $request->input('size', null);
        $petAge = $request->input('petAge', false);

        $dogs = [
            'Puppy' => [
                '0-15' => '1/2',
                '16-25' => '1',
                '26-40' => '1.5',
                '41-60' => '2.4',
                '61-80' => '3.5',
                '81-100' => '4.5',
                'Over 100' => '6'
            ],
            'Adult' => [
                '0-15' => '1',
                '16-25' => '1.',
                '26-40' => '2.5',
                '41-60' => '3.5',
                '61-80' => '4.5',
                '81-100' => '5.5',
                'Over 100' => '6+'
            ],
            'Senior' => [
                '0-15' => '1/2',
                '16-25' => '1',
                '26-40' => '2',
                '41-60' => '3',
                '61-80' => '4',
                '81-100' => '5',
                'Over 100' => '5.5'
            ],
        ];

        $results = $dogs[$petAge][$size];

        return redirect('/')->with([
            'petName' => $petName,
            'size' => $size,
            'petAge' => $petAge,
            'results' => $results,
        ]);
    }

}






