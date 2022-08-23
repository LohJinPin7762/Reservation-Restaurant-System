<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Reservation;
use Session;
use App\Models\Category;

class ReservationController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        $image=$r->file('reservationImage');        
        $image->move('images',$image->getClientOriginalName());   //images is the location                
        $imageName=$image->getClientOriginalName(); 
        $addReservation=Reservation::create([
            'restaurant'=>$r->reservationRestaurant,
            'name'=>$r->reservationName,
            'contact'=>$r->reservationContact,
            'date'=>$r->reservationDate,
            'time'=>$r->reservationTime,
            'available'=>$r->reservationAvailable,
            'CategoryID'=>$r->CategoryID,
            'image'=>$imageName,
        ]);
        Session::flash('success',"Reservation create successfully!");
        Return redirect()->route('showReservation');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewReservation=DB::table('reservations')
        ->leftjoin('categories','categories.id','=','reservations.CategoryID')
        ->select('reservations.*','categories.name as catName')
        ->get();

        Return view('showReservation')->with('reservations',$viewReservation);
    }

    public function delete($id){
        
        $deleteReservation=Reservation::find($id);
        $deleteReservation->delete();
        Session::flash('success',"Reservation was delete successfully!");
        Return redirect()->route('showReservation');
    }

    public function edit($id){ //Part A

        $reservations=Reservation::all()->where('id',$id);
        Return view('editReservation')->with('reservations',$reservations)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $reservations =Reservation::find($r->reservationID);

        if($r->file('reservationImage')!=''){
            $image=$r->file('reservationImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $reservations->image=$imageName;
            }

        $reservations->restaurant=$r->reservationRestaurant;
        $reservations->Name=$r->reservationName;
        $reservations->contact=$r->reservationContact;
        $reservations->date=$r->reservationDate;
        $reservations->time=$r->reservationTime;
        $reservations->available=$r->reservationAvailable;
        $reservations->CategoryID=$r->CategoryID;
        $reservations->save();

        Return redirect()->route('showReservation');
    }

    public function viewReservation(){

        $viewReservations=DB::table('reservations')
        ->get();

        Return view('viewReservations')->with('reservations',$viewReservations);
    }

    public function searchReservation(){
        $r=request();
        $keyword=$r->keyword;
        $reservations=DB::table('reservations')
        ->where('name','like','%'.$keyword.'%')
        ->get();

        return view('viewReservations')->with('reservations',$reservations);
    }
}
