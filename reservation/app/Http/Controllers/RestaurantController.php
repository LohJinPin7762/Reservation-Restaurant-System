<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Restaurant;
use Session;
use App\Models\Category;

class RestaurantController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('restaurantImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addProduct=Restaurant::create([
            'name'=>$r->restaurantName,
            'type'=>$r->restaurantType,
            'contact'=>$r->restaurantContact,
            'time'=>$r->restaurantTime,
            'available'=>$r->restaurantAvailable,
            'map'=>$r->restaurantMap,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Restaurant create successfully!");
        Return redirect()->route('showRestaurant');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewRestaurant=DB::table('restaurants')
        ->leftjoin('categories','categories.id','=','restaurants.CategoryID')
        ->select('restaurants.*','categories.name as catName')
        ->get();

        Return view('showRestaurant')->with('restaurants',$viewRestaurant);
    }

    public function delete($id){
        
        $deleteRestaurant=Restaurant::find($id);
        $deleteRestaurant->delete();
        Session::flash('success',"Restaurant was delete successfully!");
        Return redirect()->route('showRestaurant');
    }


    public function edit($id){ //Part A

        $restaurants=Restaurant::all()->where('id',$id);
        Return view('editRestaurant')->with('restaurants',$restaurants)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $restaurants =Restaurant::find($r->restaurantID);

        if($r->file('restaurantImage')!=''){
            $image=$r->file('restaurantImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $restaurants->image=$imageName;
            }

        $restaurants->name=$r->restaurantName;
        $restaurants->type=$r->restaurantType;
        $restaurants->contact=$r->restaurantContact;
        $restaurants->time=$r->restaurantTime;
        $restaurants->available=$r->restaurantAvailable;
        $restaurants->map=$r->restaurantMap;
        $restaurants->CategoryID=$r->CategoryID;
        $restaurants->save();

        Return redirect()->route('showRestaurant');
    }

    public function restaurantdetail($id){
        $restaurants=Restaurant::all()->where('id',$id);
        return view('restaurantDetail')->with('restaurants',$restaurants);
    }

    public function viewRestaurant(){

        $viewRestaurants=DB::table('restaurants')
        ->get();

        Return view('viewRestaurants')->with('restaurants',$viewRestaurants);
    }

    public function searchRestaurant(){
        $r=request();
        $keyword=$r->keyword;
        $restaurants=DB::table('restaurants')
        ->where('type','like','%'.$keyword.'%')
        ->get();

        return view('viewRestaurants')->with('restaurants',$restaurants);
    }
}