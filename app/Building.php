<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['bt', 'image', 'name', 'street', 'location', 'description', 'text', 'build_in', 'lat', 'long'];

 

    public function maps()
    {
        if($this->lat && $this->long){
            return "https://www.google.com/maps/search/?api=1&query=$this->lat,$this->long";
        }
        return false;
    }
}

