<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Contact;

class ContactController extends Controller
{
    public function view(){
        $data['allData'] = Contact::all();
        $data['countContact'] = Contact::count();

        return view('backend.contact.view-contact', $data);
    }

    public function add(){
    
        return view('backend.contact.add-contact');
    }

    public function store(Request $request){
        // $validatedData = $request->validate([
        //     'name_bn' => 'required|unique:categories',
        //     'name_en' => 'required|unique:categories',
        //     'status' => 'required',
        // ]);
        $contact = new Contact();
        $contact->contact_title_location_bn = $request->contact_title_location_bn;
        $contact->contact_title_location_en = $request->contact_title_location_en;
        $contact->contact_phone_bn = $request->contact_phone_bn;
        $contact->contact_phone_en = $request->contact_phone_en;
        $contact->contact_circulation_phone_bn = $request->contact_circulation_phone_bn;
        $contact->contact_circulation_phone_en = $request->contact_circulation_phone_en;
        $contact->contact_advertising_phone_bn = $request->contact_advertising_phone_bn;
        $contact->contact_advertising_phone_en = $request->contact_advertising_phone_en;
        $contact->contact_email = $request->contact_email;
        $contact->editor_name_bn = $request->editor_name_bn;
        $contact->editor_name_en = $request->editor_name_en;
        $contact->executive_editor_name_bn = $request->executive_editor_name_bn;
        $contact->executive_editor_name_en = $request->executive_editor_name_en;
        $contact->message_editor_name_bn = $request->message_editor_name_bn;
        $contact->message_editor_name_en = $request->message_editor_name_en;
        $contact->editor_office_bn = $request->editor_office_bn;
        $contact->editor_office_en = $request->editor_office_en;
        $contact->editor_phone_bn = $request->editor_phone_bn;
        $contact->editor_phone_en = $request->editor_phone_en;
        $contact->editor_email = $request->editor_email;
        $contact->save();

        return redirect()->route('contacts.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = Contact::find($id);

        return view('backend.contact.add-contact', compact('editData'));
    }

    public function update(Request $request, $id){
        $contact = Contact::find($id);
        $contact->contact_title_location_bn = $request->contact_title_location_bn;
        $contact->contact_title_location_en = $request->contact_title_location_en;
        $contact->contact_phone_bn = $request->contact_phone_bn;
        $contact->contact_phone_en = $request->contact_phone_en;
        $contact->contact_circulation_phone_bn = $request->contact_circulation_phone_bn;
        $contact->contact_circulation_phone_en = $request->contact_circulation_phone_en;
        $contact->contact_advertising_phone_bn = $request->contact_advertising_phone_bn;
        $contact->contact_advertising_phone_en = $request->contact_advertising_phone_en;
        $contact->contact_email = $request->contact_email;
        $contact->editor_name_bn = $request->editor_name_bn;
        $contact->editor_name_en = $request->editor_name_en;
        $contact->executive_editor_name_bn = $request->executive_editor_name_bn;
        $contact->executive_editor_name_en = $request->executive_editor_name_en;
        $contact->message_editor_name_bn = $request->message_editor_name_bn;
        $contact->message_editor_name_en = $request->message_editor_name_en;
        $contact->editor_office_bn = $request->editor_office_bn;
        $contact->editor_office_en = $request->editor_office_en;
        $contact->editor_phone_bn = $request->editor_phone_bn;
        $contact->editor_phone_en = $request->editor_phone_en;
        $contact->editor_email = $request->editor_email;
        $contact->save();

        return redirect()->route('contacts.view')->with('success', 'Data updated successfully');
    }

    public function delete(Request $request){
        $contact = Contact::find($request->id);
        $contact->delete();

        return redirect()->route('contacts.view')->with('success', 'Data deleted successfully');
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
