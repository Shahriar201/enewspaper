<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Model\District;
use App\Model\Menu;
use Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function view(){
        $data['allData'] = Post::orderBy('id', 'DESC')->get();

        return view('backend.post.view-post', $data);
    }

    public function add(){
        $data['categories'] = Category::where('status', '0')->get();
        // $data['categories'] = Category::select('name_en')->where('status', '0')->get();
        $data['districts'] = District::where('status', '0')->get();
        $data['menues'] = Menu::where('status', '0')->get();

        return view('backend.post.add-post', $data);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
            'menu_id' => 'required',
            'title' => 'required',
            'name_bn' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->district_id = $request->district_id;
        $post->menu_id = $request->menu_id;
        $post->title = $request->title;
        $post->name_bn = $request->name_bn;
        $post->name_en = $request->name_en;
        // $post->slug = str_slug($request->name_en);
        $post->status = $request->status;
        $post->created_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/post_images'), $fileName);
            $post['image'] = $fileName;
        }
        $post->save();

        return redirect()->route('posts.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $data['editData'] = Post::find($id);
        $data['categories'] = Category::all();
        $data['districts'] = District::all();
        $data['menues'] = Menu::all();

        return view('backend.post.add-post', $data);
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
            'menu_id' => 'required',
            'title' => 'required',
            'name_bn' => 'required',
            'name_en' => 'required',
            'status' => 'required',
            'image' => 'required',
        ]);
        $post = Post::find($id);
        $post->category_id = $request->category_id;
        $post->district_id = $request->district_id;
        $post->menu_id = $request->menu_id;
        $post->title = $request->title;
        $post->name_bn = $request->name_bn;
        $post->name_en = $request->name_en;
        $post->status = $request->status;
        $post->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/post_images/'.$post->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/post_images'), $fileName);
            $post['image'] = $fileName;
        }
        $post->save();

        return redirect()->route('posts.view')->with('success', 'Data updated successfully');
    }

    public function delete(Request $request){
        $post = Post::find($request->id);
        if(file_exists('public/upload/post_images/' . $post->image) AND ! empty($post->image)){
            unlink('public/upload/post_images/' . $post->image);
        }
        $post->delete();

        return redirect()->route('posts.view')->with('success', 'Data deleted successfully');
    }

    public function status(Request $request){
		// dd($request->id);
        $post_status =Post::find($request->id);
        // dd($post_status);
		if($post_status->status == 0)
		{
			$post_status->status = 1;
			$post_status->save();
			
		}elseif($post_status->status ==1 )
		{   
			$post_status->status = 0;
			$post_status->save();	
		}
		
        $post_status =Post::where('id', $request->id)->first();
		
		return json_encode($post_status);
	}
}
