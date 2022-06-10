<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    // 'Knittersland met BGMEA' blog details:
    public function knitterslandMetBgmea()
    {
        return view('main-pages.blog.knittersland-met-bgmea');
    }

    // 'Discover difference with Nilam.xyz' blog details:
    public function discoverDifferenceWithNilamXyz()
    {
        return view('main-pages.blog.discover-difference-with-nilamxyz');
    }
    
    // 'Travel Kotha introduces XiRooms' blog details:
    public function travelKothaIntroducesXirooms()
    {
        return view('main-pages.blog.travel-kotha-introduces-xirooms');
    }
}
