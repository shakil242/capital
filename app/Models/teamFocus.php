<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class teamFocus extends Model
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_focus';

    public function coralTeam()
    {
        return $this->belongsTo('CoralTeam');

    }






}