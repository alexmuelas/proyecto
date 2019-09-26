<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name', 'id_user', 'id_team', 'num_dorsal', 'valor_inicial', 'position','points'];

}
