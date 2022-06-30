<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Peak Blinders',
            'Better Call Saul',
            'The Wither'
        ];

        return view('series.index', compact('series'));
    }

    public function criar()
    {
        return view('series.criar');
    }
}
