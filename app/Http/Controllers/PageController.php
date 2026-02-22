<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    

    public function about()
    {
        return view('pages.about');
    }

    public function tours()
    {
        return view('pages.tours');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function booking()
    {
        return view('pages.booking');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
