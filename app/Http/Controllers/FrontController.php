<?php

namespace App\Http\Controllers;

use App\Models\Offre;
use App\Models\Projet;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Home()
    {
        return view("home");
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function blogHome()
    {
       return view("pages.bloghome");
    }
    public function elements()
    {
        return view("pages.elements");
    }
    public function projetDetails()
    {
        $projetTout = Projet::all();
       return view("pages.projectdetails",compact("projetTout"));
    }
    public function projects()
    {
        $projetTout = Projet::all();
        return view("pages.projects",compact("projetTout"));
    }
    public function services()
    {
        $serviceTout = Service::all();
        $offreTout = Offre::all();
        return view("pages.services",compact("serviceTout","offreTout"));
    }

    public function admin()
    {
        return view("admin.dashboard");
    }
}
