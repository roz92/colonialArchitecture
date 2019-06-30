<?php

namespace App\Http\Controllers;

use App\Imports\BuildingImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        Excel::import(new BuildingImport, 'data.xlsx');

        return redirect()->route('buildings.index')
            ->with('success','Building created successfully.');
    }
}
