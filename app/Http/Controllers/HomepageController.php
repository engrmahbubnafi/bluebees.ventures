<?php

namespace App\Http\Controllers;

class HomepageController extends Controller
{    
    # sendJsonData() will send menu text from "menu.json" to "navbar".
    // public function sendJsonData(){
    //     $menu = json_decode(file_get_contents(base_path('menu.json')));
    //     return view('components.navbar', ['menu'=>$menu]);
    // }

    public function homepage()
    {
        return view('main-pages.home');
    }

    public function aboutUs()
    {
        return view('main-pages.about-us');
    }

    public function bluebeesxyz()
    {
        return view('main-pages.bluebeesxyz');
    }

    public function knittersland()
    {
        return view('main-pages.knittersland');
    }

    public function bluebeesai()
    {
        return view('main-pages.bluebeesai');
    }

    public function trux24()
    {
        return view('main-pages.trux24');
    }

    public function xirooms()
    {
        return view('main-pages.xirooms');
    }

    public function nilamxyz()
    {
        return view('main-pages.nilamxyz');
    }

    public function bluebees4u()
    {
        return view('main-pages.bluebees4u');
    }

    public function contact()
    {
        return view('main-pages.contact');
    }

    public function nilam360()
    {
        return view('main-pages.nilam360');
    }

    public function blog()
    {
        return view('main-pages.blog');
    }

}
