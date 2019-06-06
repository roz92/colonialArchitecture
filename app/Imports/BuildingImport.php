<?php

namespace App\Imports;

use App\Building;
use Maatwebsite\Excel\Concerns\OnEachRow;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Row;

class BuildingImport implements OnEachRow
{
    /**
     * @param array $row
     * @return Building|null
     */
    public function onRow(Row $row)
    {
        if($row->getIndex() == 1 ){
            return;
        }
        $row = $row->toArray();

        $coordinates[0] = null;
        $coordinates[1] = null;
        if($row[6] !== null){
            $coordinates = explode(',', $row[6]);
        }

        Building::create([
            'bt' => $row[1],
            'name' => $row[7],
            'street' => $row[3],
            'location' => $row[2],
            'description' => $row[9],
            'build_in' => $row[11],
            'lat' => $coordinates[0],
            'long' => $coordinates[1],
        ]);
    }
}
