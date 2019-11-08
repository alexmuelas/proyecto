<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['id', 'name', 'id_user', 'id_team', 'num_dorsal', 'valor_inicial', 'id_position','points','titular','goals'];

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

    public function getPositionNameAttribute()
    {
        $position = Position::where('id', $this->id_position)->first()->name;

        return $position;
    }

}
