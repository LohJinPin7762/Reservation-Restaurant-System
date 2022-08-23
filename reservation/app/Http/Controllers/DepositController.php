<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Deposit;
use Session;
use App\Models\Category;

class DepositController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('depositImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addDeposit=Deposit::create([
            'name'=>$r->depositName,
            'email'=>$r->depositEmail,
            'number'=>$r->depositNumber,
            'price'=>$r->depositPrice,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Deposit create successfully!");
        Return redirect()->route('viewSMS');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewDeposit=DB::table('deposits')
        ->leftjoin('categories','categories.id','=','deposits.CategoryID')
        ->select('deposits.*','categories.name as catName')
        ->get();

        Return view('showDeposit')->with('deposits',$viewDeposit);
    }


    public function delete($id){
        
        $deleteDeposit=Deposit::find($id);
        $deleteDeposit->delete();
        Session::flash('success',"Deposit was delete successfully!");
        Return redirect()->route('showDeposit');
    }

    public function edit($id){ //Part A

        $deposits=Deposit::all()->where('id',$id);
        Return view('editDeposit')->with('deposits',$deposits)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $deposits =Deposit::find($r->depositID);

        if($r->file('depositImage')!=''){
            $image=$r->file('depositImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $deposits->image=$imageName;
            }

        $deposits->name=$r->depositName;
        $deposits->email=$r->depositEmail;
        $deposits->number=$r->depositNumber;
        $deposits->price=$r->depositPrice;
        $deposits->CategoryID=$r->CategoryID;
        $deposits->save();

        Return redirect()->route('showDeposit');
    }

    public function viewDeposit(){

        $viewDeposits=DB::table('deposits')
        ->get();

        Return view('viewDeposits')->with('deposits',$viewDeposits);
    }
}

