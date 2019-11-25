<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puja extends Model
{
    public function getPositionNameAttribute()
    {
        $position = Position::where('id', $this->id_position)->first()->name;

        return $position;
    }
}
