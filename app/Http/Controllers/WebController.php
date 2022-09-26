<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class WebController extends Controller
{
    public function index()
    {

         return view('index');
        
        
    }

    public function about()
    {
        return view('about-us');
    }


    public function walldecals()
    {
        return view('vector-walldecals');
    }


    public function walldecals_details()
    {
        return view('vector-walldecals-details');
    }


    public function decals()
    {
        return view('wall-decals');
    }

    public function decals_details()
    {
        return view('wall-decals-details');
    }

 

    public function wallpaper()
    {
        return view('wallpaper');
    }

   public function wallpaper_details()
    {
        return view('wallpaper-details');
    }

    public function babycards()
    {
        return view('baby-cards');
    }

    public function baby_cards_details()
    {
        return view('baby-cards-details');
    }

    public function prints()
    {
        return view('prints');
    }


    public function shipping()
    {
        return view('shipping');
    }

    public function faq()
    {
        return view('faq');
    }

    public function terms()
    {
        return view('term-conditions');
    }

    public function contact()
    {
        return view('contact');
    }
}
