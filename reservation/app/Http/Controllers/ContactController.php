<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Contact;
use Session;
use App\Models\Category;

class ContactController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('contactImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addContact=Contact::create([
            'name'=>$r->contactName,
            'email'=>$r->contactEmail,
            'number'=>$r->contactNumber,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Contact create successfully!");
        Return redirect()->route('showContact');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewContact=DB::table('contacts')
        ->leftjoin('categories','categories.id','=','contacts.CategoryID')
        ->select('contacts.*','categories.name as catName')
        ->get();

        Return view('showContact')->with('contacts',$viewContact);
    }


    public function delete($id){
        
        $deleteContact=Contact::find($id);
        $deleteContact->delete();
        Session::flash('success',"Contact was delete successfully!");
        Return redirect()->route('showContact');
    }

    public function edit($id){ //Part A

        $contacts=Contact::all()->where('id',$id);
        Return view('editContact')->with('contacts',$contacts)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $contacts =Contact::find($r->contactID);

        if($r->file('contactImage')!=''){
            $image=$r->file('contactImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $contacts->image=$imageName;
            }

        $contacts->name=$r->contactName;
        $contacts->email=$r->contactEmail;
        $contacts->number=$r->contactNumber;
        $contacts->CategoryID=$r->CategoryID;
        $contacts->save();

        Return redirect()->route('showContact');
    }

}