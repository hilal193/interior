<?php

namespace App\Http\Controllers;

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
       return view("pages.blog-home");
    }
    public function elements()
    {
        return view("pages.elements");
    }
    public function projetDetails()
    {
       return view("pages.project-details");
    }
    public function projets()
    {
        return view("pages.projects");
    }
    public function services()
    {
        return view("pages.services");
    }
}
