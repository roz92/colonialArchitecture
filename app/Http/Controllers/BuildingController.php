<?php

namespace App\Http\Controllers;

use App\Building;

use Illuminate\Http\Request;

class BuildingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buildings = Building::get();
        // usort($buildings, function($a, $b) {
        //     return $a->location > $b->location; 
        // });
        // Check if buildig image exists in folder
        return view('buildings.index', compact('buildings'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $values = ["airfields", 
                    "apartment houses", 
                    "auction house", "banks",
                    "broadcasting stations", 
                    "churches", 
                    "city halls", 
                    "corporate headquarters", 
                    "crematories", 
                    "crime laboratories", 
                    "dwellings", 
                    "embassies", 
                    "exhibition buildings", 
                    "factories", 
                    "government buildings", 
                    "headhouses", 
                    "hospitals", 
                    "hotels",
                    "houses",
                    "hydroelectric power plants",
                    "industrial companies",
                    "libraries",
                    "memorials",
                    "monastries",
                    "morgues",
                    "mosques",
                    "motion picture theaters",
                    "museums",
                    "observatories",
                    "other",
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

        return view('buildings.create', compact('values'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'name' => 'required',
            'location' => 'required',
            'description'=>'nullable',
            'build_in' =>'nullable',
            'text' => 'nullable',
        ]);

        $image = $request->file('image');
        $filename = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $filename);

        $data = $request->all();
        $data['image'] = '/images/'.$filename;

        Building::create($data);

        return redirect()->route('buildings.index')
            ->with('success','Building created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Building  $building
     * @return \Illuminate\Http\Response
     */
    public function show(Building $building)
    {
         return view('buildings.show',compact('building'));
    }
}
