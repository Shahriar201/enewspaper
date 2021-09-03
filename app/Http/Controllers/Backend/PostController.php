<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\Category;
use App\Model\District;

class PostController extends Controller
{
    public function view(){
        $data['allData'] = Post::all();

        return view('backend.post.view-post', $data);
    }

    public function add(){
        $data['categories'] = Category::where('status', '0')->get();
        // $data['categories'] = Category::select('name_en')->where('status', '0')->get();
        $data['districts'] = District::where('status', '0')->get();

        return view('backend.post.add-post', $data);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'category_id' => 'required',
            'district_id' => 'required',
            'name_bn' => 'required',
            'name_en' => 'required',
            'status' => 'required',
        ]);
        $post = new Post();
        $post->category_id = $request->category_id;
        $post->district_id = $request->district_id;
        $post->name_bn = $request->name_bn;
        $post->name_en = $request->name_en;
        $post->status = $request->status;
        $post->created_by = Auth::user()->id;
        $post->save();

        return redirect()->route('posts.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = District::find($id);

        return view('backend.district.add-district', compact('editData'));
    }

    public function update(Request $request, $id){
        $validatedData = $request->validate([
            'name_bn' => 'required|unique:districts',
            'name_en' => 'required|unique:districts',
            'status' => 'required',
        ]);
        $district = District::find($id);
        $district->name_bn = $request->name_bn;
        $district->name_en = $request->name_en;
        $district->status = $request->status;
        $district->updated_by = Auth::user()->id;
        $district->save();

        return redirect()->route('districts.view')->with('success', 'Data updated successfully');
    }

    public function delete(Request $request){
        $district = District::find($request->id);
        $district->delete();

        return redirect()->route('districts.view')->with('success', 'Data deleted successfully');
    }

    public function status(Request $request){
		// dd($request->id);
        $category_status =Category::find($request->category_id);
        // dd($category_status);
		if($category_status->status == 0)
		{
			$category_status->status = 1;
			$category_status->save();
			
		}elseif($category_status->status ==1 )
		{   
			$category_status->status = 0;
			$category_status->save();	
		}
		
        $category_status =Category::where('id', $request->category_id)->first();
		
		return json_encode($category_status);
	}
}
