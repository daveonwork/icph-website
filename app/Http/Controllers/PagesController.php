<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('website.landing.home');
    }

    public function about(){
        return view('website.about.about');
    }

    public function departments(){
        return view('website.departments.departments');
    }

    public function contact(){
        return view('website.contact.contact');
    }

    public function doctors(){
        return view('website.doctors.doctors');
    }

    public function gallery(){
        return view('website.gallery.gallery');
    }

    public function services(){
        return view('website.services.services');
    }
    
}
