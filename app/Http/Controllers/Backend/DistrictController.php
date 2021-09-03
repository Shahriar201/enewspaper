<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\District;
use Auth;

class DistrictController extends Controller
{
    public function view(){
        $data['allData'] = District::all();

        return view('backend.district.view-district', $data);
    }

    public function add(){
        return view('backend.district.add-district');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name_bn' => 'required|unique:districts',
            'name_en' => 'required|unique:districts',
            'status' => 'required',
        ]);
        $district = new District();
        $district->name_bn = $request->name_bn;
        $district->name_en = $request->name_en;
        $district->status = $request->status;
        $district->created_by = Auth::user()->id;
        $district->save();

        return redirect()->route('districts.view')->with('success', 'Data inserted successfully');
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
        $district_status =District::find($request->district_id);
        // dd($district_status);
		if($district_status->status == 0)
		{
			$district_status->status = 1;
			$district_status->save();
			
		}elseif($district_status->status ==1 )
		{   
			$district_status->status = 0;
			$district_status->save();	
		}
		
        $district_status =District::where('id', $request->district_id)->first();
		
		return json_encode($district_status);
	}
}
