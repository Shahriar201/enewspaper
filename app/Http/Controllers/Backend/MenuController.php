<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Menu;
use Auth;

class MenuController extends Controller
{
    public function view(){
        $data['allData'] = Menu::orderBy('priority', 'DESC')->get();

        return view('backend.menu.view-menu', $data);
    }

    public function add(){
        return view('backend.menu.add-menu');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name_bn' => 'required|unique:menus',
            'name_en' => 'required|unique:menus',
            'priority' => 'required',
            'status' => 'required',
        ]);
        $menu = new Menu();
        $menu->name_bn = $request->name_bn;
        $menu->name_en = $request->name_en;
        $menu->status = $request->status;
        $menu->priority = $request->priority;
        $menu->created_by = Auth::user()->id;
        $menu->save();

        return redirect()->route('menues.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = Menu::find($id);

        return view('backend.menu.add-menu', compact('editData'));
    }

    public function update(Request $request, $id){
        
        $menu = Menu::find($id);
        $menu->name_bn = $request->name_bn;
        $menu->name_en = $request->name_en;
        $menu->priority = $request->priority;
        $menu->status = $request->status;
        $menu->updated_by = Auth::user()->id;
        $menu->save();

        return redirect()->route('menues.view')->with('success', 'Data updated successfully');
    }

    public function delete(Request $request){
        $menu = Menu::find($request->id);
        $menu->delete();

        return redirect()->route('menues.view')->with('success', 'Data deleted successfully');
    }

    public function status(Request $request){
		// dd($request->id);
        $menu_status =Menu::find($request->id);
        // dd($menu_status);
		if($menu_status->status == 0)
		{
			$menu_status->status = 1;
			$menu_status->save();
			
		}elseif($menu_status->status ==1 )
		{   
			$menu_status->status = 0;
			$menu_status->save();	
		}
		
        $menu_status =Menu::where('id', $request->id)->first();
		
		return json_encode($menu_status);
	}
}
