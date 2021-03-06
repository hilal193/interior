<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Offre;
use App\Models\Projet;
use App\Models\Contact;
use App\Models\Service;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function Home()
    {
        $offreTout = Offre::all();
        if (count(Projet::all()) < 6) {
           $projetTout = Projet::all();
        }else {

            $projetTout = Projet::take(6)->get();
        }
        // $projetTout = Projet::inRandomOrder()->take(6)->get();
        $serviceTout = Service::all();
        // $articleTout = Article::all();
        $articleTout = Article::latest()->take(6)->get();
        // Article::orderBy("created_at","desc")->paginate(2);
        $categorieTout = Categorie::all();


        // $projetTout = Projet::find($id);
        // return view("home",compact("projetTout"));
        return view("home",compact("offreTout","projetTout","serviceTout","articleTout","categorieTout"));
    }
    public function contact()
    {
        $contactTout = Contact::all();
        return view('pages.contact',compact("contactTout"));
    }
    public function blogHome()
    {
        $articleTout = Article::all();
        $categorieTout = Categorie::all();
        // dd($articleTout);
       return view("pages.bloghome", compact("articleTout","categorieTout"));
    }
    public function elements()
    {
        return view("pages.elements");
    }
    public function projetDetails($id)
    {

        $projetTout = Projet::find($id);
        // dd($projetTout);
        return view("pages.projectdetails",compact("projetTout"));
    }
    public function blogDetails($id)
    {

        $articleTout = Article::find($id);
        // dd($projetTout);
        return view("pages.blogdetails",compact("articleTout"));
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
