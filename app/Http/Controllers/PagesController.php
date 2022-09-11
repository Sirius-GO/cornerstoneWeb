<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{

    public function home() 
    {
        return view('pages.home');
    }

    public function about() 
    {
        return view('pages.about');
    }

    public function services() 
    {
        return view('pages.services');
    }

    public function contact() 
    {
        return view('pages.contact');
    }

    public function careers() 
    {
        return view('pages.careers');
    }

    public function apply_online() 
    {
        return view('pages.apply_online');
    }

    public function apply_online2() 
    {
        return view('pages.apply_online2');
    }

    public function apply_online3() 
    {
        return view('pages.apply_online3');
    }

    public function apply_online4() 
    {
        return view('pages.apply_online4');
    }

    public function apply_online5() 
    {
        return view('pages.apply_online5');
    }

    public function apply_online6() 
    {
        return view('pages.apply_online6');
    }

} // End of Class
