<?php

namespace App\Http\Controllers;

use App\Models\Bio;
use App\Models\CoralTeam;
use Illuminate\Http\Request;

use App\Http\Requests;

class BioController extends Controller
{

    public $people = [];


    public function index()
    {

        $people = CoralTeam::with(['teamAffiliation','boardMembership','teamCertification','teamFocus','teamJobs','teamExperience'])->get();

        return view('pages.bio.index')->with('people',$people);
    }

    public function show($slug)
    {

        $person = CoralTeam::with(['teamAffiliation','boardMembership','teamCertification','teamFocus','teamJobs','teamExperience'])
            ->where('slug',$slug)->get();
        return view('pages.bio.show')->with('person', $person);
    }
}
