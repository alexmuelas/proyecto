<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{

    protected $fillable = [
        'name'
    ];
    
    public function player()
    {
        return $this->hasMany(Player::class);
    }
}
