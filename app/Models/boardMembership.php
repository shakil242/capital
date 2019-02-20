<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class boardMembership extends Model
{

    protected $fillable = ['team_id', 'title'];

    public $table = 'coral_team_board_membership';

    public function coralTeam()
    {
        return $this->belongsTo('CoralTeam');

    }





}