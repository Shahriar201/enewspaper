<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        // return view('auth.login');
        return view('frontend.layouts.home', $data);
    }

    public function nationalMenu(){
        $data['logo'] = Logo::first();
        
        return view('frontend.single_pages.national-menu-view', $data);
    }
}
