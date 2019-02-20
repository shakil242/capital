<?php

namespace App\Models;
//
//use App\Models\CoralTeam;
//use Illuminate\Database\Eloquent\Model;

use Eloquent;

class teamAffiliation extends Eloquent
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_affiliation';

    public function coralTeam()
    {
        return $this->belongsTo('App\Models\CoralTeam');

    }





}