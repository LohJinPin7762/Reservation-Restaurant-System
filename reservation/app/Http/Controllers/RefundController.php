<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Refund;
use Session;
use App\Models\Category;

class RefundController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('refundImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addRefund=Refund::create([
            'name'=>$r->refundName,
            'email'=>$r->refundEmail,
            'number'=>$r->refundNumber,
            'price'=>$r->refundPrice,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Refund has successfully!");
        Return redirect()->route('showRefund');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewRefund=DB::table('refunds')
        ->leftjoin('categories','categories.id','=','refunds.CategoryID')
        ->select('refunds.*','categories.name as catName')
        ->get();

        Return view('showRefund')->with('refunds',$viewRefund);
    }


    public function delete($id){
        
        $deleteRefund=Refund::find($id);
        $deleteRefund->delete();
        Session::flash('success',"Refund Depoist was delete successfully!");
        Return redirect()->route('showRefund');
    }

    public function edit($id){ //Part A

        $refunds=Refund::all()->where('id',$id);
        Return view('editRefund')->with('refunds',$refunds)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $refunds =Refund::find($r->refundID);

        if($r->file('refundImage')!=''){
            $image=$r->file('refundImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $refunds->image=$imageName;
            }

        $refunds->name=$r->refundName;
        $refunds->email=$r->refundEmail;
        $refunds->number=$r->refundNumber;
        $refunds->price=$r->refundPrice;
        $refunds->CategoryID=$r->CategoryID;
        $refunds->save();

        Return redirect()->route('showRefund');
    }

    public function viewRefund(){

        $viewRefunds=DB::table('refunds')
        ->get();

        Return view('viewRefunds')->with('refunds',$viewRefunds);
    }
}
