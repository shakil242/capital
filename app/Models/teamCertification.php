<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class teamCertification extends Model
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_certification';

    public function coralTeam()
    {
        return $this->belongsTo('CoralTeam');

    }





}