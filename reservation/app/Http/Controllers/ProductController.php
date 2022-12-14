<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use Session;
use App\Models\Category;

class ProductController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('productImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addProduct=Product::create([
            'name'=>$r->productName,
            'type'=>$r->productType,
            'available'=>$r->productAvailable,
            'price'=>$r->productPrice,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Product create successfully!");
        Return redirect()->route('showProduct');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewProduct=DB::table('products')
        ->leftjoin('categories','categories.id','=','products.CategoryID')
        ->select('products.*','categories.name as catName')
        ->get();

        Return view('showProduct')->with('products',$viewProduct);
    }


    public function delete($id){
        
        $deleteProduct=Product::find($id);
        $deleteProduct->delete();
        Session::flash('success',"Product was delete successfully!");
        Return redirect()->route('showProduct');
    }

    public function edit($id){ //Part A

        $products=Product::all()->where('id',$id);
        Return view('editProduct')->with('products',$products)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $products =Product::find($r->productID);

        if($r->file('productImage')!=''){
            $image=$r->file('productImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $products->image=$imageName;
            }

        $products->name=$r->productName;
        $products->type=$r->productType;
        $products->price=$r->productPrice;
        $products->available=$r->productAvailable;
        $products->CategoryID=$r->CategoryID;
        $products->save();

        Return redirect()->route('showProduct');
    }


    public function productdetail($id){
        $products=Product::all()->where('id',$id);
        return view('productDetail')->with('products',$products);
    }

    public function viewProduct(){

        $viewProducts=DB::table('products')
        ->get();

        Return view('viewProducts')->with('products',$viewProducts);
    }

}