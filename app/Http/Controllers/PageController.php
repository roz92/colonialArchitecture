<?php

namespace App\Http\Controllers;

use App\Building;

class PageController
{
    public function home()
    {
    	 $values = ["airfields", "apartment houses", "auction house", "banks",
                    "broadcasting stations", "churches", "city halls", "corporate headquarters", "crematories", "crime laboratories", "dwellings", "embassies", "exhibition buildings", "factories", "government buildings", "headhouses", "hospitals", "hotels",
                                                "houses",
                        "hydroelectric power plants",
                        "industrial companies",
                        "libraries",
                        "memorials",
                        "monastries",
                        "morgues",
                        "mosques",
                        "motion picture theaters",
                        "observatories",
                        "office buildings",
                        "palaces",
                        "pavilions",
                        "post offices",
                        "religious buildings",
                        "retirement homes",
                        "roads",
                        "schools",
                        "slaughterhouses",
                        "societies' buildings",
                        "stores",
                        "swimming pools",
                        "theaters",
                        "trainstations",
                        "urban plannings",
                        "water towers",
                        "work spaces"
                    ];
        return view('pages.home',  compact('values'));
    }

    public function surprise()
    {
        $building = Building::all()->random();

        return view('surprise', compact('building'));
    }
}