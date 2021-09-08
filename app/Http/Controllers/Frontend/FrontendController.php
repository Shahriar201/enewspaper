<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Menu;
use App\Model\District;
use App\Model\Post;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['menues'] = Menu::where('status', '0')->get();
        $data['districts'] = District::where('status', '0')->get();
        $data['posts'] = Post::where('status', '0')->get();
        
        return view('frontend.layouts.home', $data);
    }

    // public function menu(){
    //     $data['menues'] = Menu::all();
        
    //     return view('frontend.layouts.menu', $data);
    // }

    public function nationalMenu(){
        $data['logo'] = Logo::first();
        
        return view('frontend.single_pages.national-menu-view', $data);
    }
}
