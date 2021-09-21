<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Menu;
use App\Model\District;
use App\Model\Post;
use App\Model\Category;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['menues'] = Menu::where('status', '0')->orderBy('priority', 'DESC')->get();
        $data['districts'] = District::where('status', '0')->get();
        $data['posts'] = Post::where('status', '0')->get();
        
        return view('frontend.layouts.home', $data);
    }

    public function singlePost(Request $request, $id){
        $data['logo'] = Logo::first();
        $data['menues'] = Menu::where('status', '0')->orderBy('priority', 'DESC')->get();
        $data['districts'] = District::where('status', '0')->get();
        $data['post'] = Post::where('id', $id)->first();
        $data['category_names'] = Category::where('status', 0)->get();

        $data['menu'] = Menu::all();
        $data['category_wise_posts'] = Post::where('status', 0)->where('category_id', $id)->orderBy('id', 'DESC')->get();
        // $data['posts'] = Post::where('status', 0)->orderBy('id', 'DESC')->get();
        dd($data['category_wise_posts']->toArray());

        return view('frontend.layouts.single_post.index', $data);
    }

    public function singleMenu(Request $request, $id){
        $data['logo'] = Logo::first();
        $data['menues'] = Menu::where('status', 0)->get();
        $data['menue_name'] = Menu::where('status', 0)->where('id', $request->id)->get();
        $data['districts'] = District::where('status', 0)->get();
        // $data['all_posts'] = Post::where('status', 0)->get();
        $data['posts'] = Post::where('status', 0)->where('menu_id', $request->id)->orderBy('id', 'DESC')->get();

        // dd($data['posts']->toArray());

        return view('frontend.single_pages.single-menu-view', $data);
    }
}
