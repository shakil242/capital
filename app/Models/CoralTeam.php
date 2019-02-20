<?php

namespace App\Models;

use Eloquent;

//use Illuminate\Database\Eloquent\Model;


class CoralTeam extends Eloquent
{

    protected $table = 'coral_team';

    protected $fillable = ['name', 'body','slug'];

    public function teamAffiliation()
    {
        return $this->hasMany('App\Models\teamAffiliation','team_id');
    }

    public function boardMembership()
    {
        return $this->hasMany('App\Models\boardMembership','team_id');
    }
    public function teamCertification()
    {
        return $this->hasMany('App\Models\teamCertification','team_id');
    }
    public function teamFocus()
    {
        return $this->hasMany('App\Models\teamFocus','team_id');
    }
    public function teamJobs()
    {
        return $this->hasMany('App\Models\teamJobs','team_id');
    }
    public function teamExperience()
    {
        return $this->hasMany('App\Models\teamExperience','team_id');
    }




}