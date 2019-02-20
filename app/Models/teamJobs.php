<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class teamJobs extends Model
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_jobs';

    public function coralTeam()
    {
        return $this->belongsTo('CoralTeam');

    }





}