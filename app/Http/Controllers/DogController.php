<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function info(Request $request) {
        return view('dogs.info')->with([
            'petName' => $request->session()->get('petName', ''),
            'petAge' => $request->session()->get('petAge', false),
            'size' => $request->session()->get('size', []),
        ]);
    }
    public function infoProcess(Request $request)
    {
        $petName = $request->input('petName', null);
        $size = $request->input('size', null);
        $petAge = $request->input('petAge', null);

        $dogs = [
            'Puppy' => [
                '0-15' => '1/2',
                '16-25' => '1',
                '26-40' => '1.5',
                '41-60' => '2.4',
                '61-80' => '3.5',
                '81-100' => '4.5',
                '101' => '6'
            ],
            'Adult' => [
                '0-15' => '1',
                '16-25' => '1.',
                '26-40' => '2.5',
                '41-60' => '3.5',
                '61-80' => '4.5',
                '81-100' => '5.5',
                '101' => '6+'
            ],
            'Senior' => [
                '0-15' => '1/2',
                '16-25' => '1',
                '26-40' => '2',
                '41-60' => '3',
                '61-80' => '4',
                '81-100' => '5',
                '101' => '5.5'
            ],
        ];


        return redirect('/your-results')->with([
            'petName' => $petName,
            'size' => $size,
            'petAge' => $request->has('petAge'),
        ]);

    }


    public function infoSubmitted()
    {
        return view('dogs.info');

    }

}
