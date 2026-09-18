<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function facility()
    {
        return view('pages.facility');
    }

    public function products()
    {
        return view('pages.products');
    }

    public function partnership()
    {
        return view('pages.partnership');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
