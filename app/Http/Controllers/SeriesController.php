<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request){
        $series = [
            'Peak Blinders',
            'Better Call Saul',
            'The Wither'
        ];

        return view('listar-series', [
            'series' => $series
        ]);
    }
}
