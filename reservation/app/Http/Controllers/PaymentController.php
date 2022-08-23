<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Payment;
use Session;
use App\Models\Category;

class PaymentController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('paymentImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addPayment=Payment::create([
            'name'=>$r->paymentName,
            'type'=>$r->paymentType,
            'number'=>$r->paymentNumber,
            'price'=>$r->paymentPrice,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Payment was successfully!");
        Return redirect()->route('showPayment');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewPayment=DB::table('payments')
        ->leftjoin('categories','categories.id','=','payments.CategoryID')
        ->select('payments.*','categories.name as catName')
        ->get();

        Return view('showPayment')->with('payments',$viewPayment);
    }


    public function delete($id){
        
        $deletePayment=Payment::find($id);
        $deletePayment->delete();
        Session::flash('success',"Payment was delete successfully!");
        Return redirect()->route('showPayment');
    }

    public function edit($id){ //Part A

        $payments=Payment::all()->where('id',$id);
        Return view('editPayment')->with('payments',$payments)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $payments =Payment::find($r->paymentID);

        if($r->file('paymentImage')!=''){
            $image=$r->file('paymentImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $payments->image=$imageName;
            }

        $payments->name=$r->paymentName;
        $payments->type=$r->paymentType;
        $payments->price=$r->paymentPrice;
        $payments->number=$r->paymentNumber;
        $payments->CategoryID=$r->CategoryID;
        $payments->save();

        Return redirect()->route('showPayment');
    }

    public function viewPayment(){

        $viewPayments=DB::table('payments')
        ->get();

        Return view('viewPayments')->with('payments',$viewPayments);
    }

}
