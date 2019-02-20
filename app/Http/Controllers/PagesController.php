<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view("pages.home");
    }

    public function whoweare()
    {
        return view('pages.about.whoweare');
    }

    public function whatwedo()
    {
        return view('pages.about.whatwedo');
    }

    public function howwedoit()
    {
        return view('pages.about.howwedoit');
    }

    public function corporate()
    {
        return view('pages.services.corporate');
    }

    public function estate()
    {
        return view('pages.services.estate');
    }

    public function financial()
    {
        return view('pages.services.financial');
    }

    public function insurance()
    {
        return view('pages.services.insurance');
    }

    public function investment()
    {
        return view('pages.services.investment');
    }

    public function personalRetirement()
    {
        return view('pages.services.personal-retirement');
    }

    public function businessSuccession()
    {
        return view('pages.services.business-succession');
    }

    public function cfmHorizon()
    {
        return view('pages.services.cfm-horizon');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function disclosures()
    {
        return view("pages.disclosures");
    }
}
