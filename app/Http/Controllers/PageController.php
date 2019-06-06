<?php

namespace App\Http\Controllers;

use App\Building;

class PageController
{
    public function home()
    {
        return view('pages.home');
    }

    public function surprise()
    {
        $building = Building::all()->random();

        return view('surprise', compact('building'));
    }
}