<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Admin;
use Session;
use App\Models\Category;

class AdminController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('adminImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addAdmin=Admin::create([
            'name'=>$r->adminName,
            'email'=>$r->adminEmail,
            'number'=>$r->adminNumber,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Admin create successfully!");
        Return redirect()->route('showAdmin');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewAdmin=DB::table('admins')
        ->leftjoin('categories','categories.id','=','admins.CategoryID')
        ->select('admins.*','categories.name as catName')
        ->get();

        Return view('showAdmin')->with('admins',$viewAdmin);
    }


    public function delete($id){
        
        $deleteAdmin=Admin::find($id);
        $deleteAdmin->delete();
        Session::flash('success',"Admin was delete successfully!");
        Return redirect()->route('showAdmin');
    }

    public function edit($id){ //Part A

        $admins=Admin::all()->where('id',$id);
        Return view('editAdmin')->with('admins',$admins)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $admins =Admin::find($r->adminID);

        if($r->file('adminImage')!=''){
            $image=$r->file('adminImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $admins->image=$imageName;
            }

        $admins->name=$r->adminName;
        $admins->email=$r->adminEmail;
        $admins->number=$r->adminNumber;
        $admins->CategoryID=$r->CategoryID;
        $admins->save();

        Return redirect()->route('showAdmin');
    }

    public function admindetail($id){
        $admins=Admin::all()->where('id',$id);
        return view('adminDetail')->with('admins',$admins);
    }

    public function viewAdmin(){

        $viewAdmins=DB::table('admins')
        ->get();

        Return view('viewAdmins')->with('admins',$viewAdmins);
    }

    public function searchAdmin(){
        $r=request();
        $keyword=$r->keyword;
        $admins=DB::table('admins')
        ->where('name','like','%'.$keyword.'%')
        ->get();

        return view('viewAdmins')->with('admins',$admins);
    }

}