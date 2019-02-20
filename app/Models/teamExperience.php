<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class teamExperience extends Model
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_Other_experience';

    public function coralTeam()
    {
        return $this->belongsTo('CoralTeam');

    }





}