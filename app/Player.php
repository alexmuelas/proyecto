<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name', 'id_user', 'id_team', 'num_dorsal', 'valor_inicial', 'position','points'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

        public function getTeamNameAttribute()
    {
        $team = Team::where('id', $this->id_team)->first()->name;

        return $team;
    }

    public function getUserNameAttribute()
    {
        $user = User::where('id', $this->id_user)->first()['name'];
        
        return $user;
    }

}
