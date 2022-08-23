<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Feedback;
use Session;
use App\Models\Category;

class FeedbackController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod 
        
        $addFeedback=Feedback::create([
            'name'=>$r->feedbackName,
            'email'=>$r->feedbackEmail,
            'feedback'=>$r->feedbackFeedback,
            'CategoryID'=>$r->CategoryID,
        ]);
        Session::flash('success',"Feedback create successfully!");
        Return redirect()->route('showFeedback');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewFeedback=DB::table('feedback')
        ->leftjoin('categories','categories.id','=','feedback.CategoryID')
        ->select('feedback.*','categories.name as catName')
        ->get();

        Return view('showFeedback')->with('feedback',$viewFeedback);
    }


    public function delete($id){
        
        $deleteFeedback=Feedback::find($id);
        $deleteFeedback->delete();
        Session::flash('success',"Feedback was delete successfully!");
        Return redirect()->route('showFeedback');
    }

    public function edit($id){ //Part A

        $feedbacks=Feedback::all()->where('id',$id);
        Return view('editFeedback')->with('feedback',$feedbacks)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $feedbacks =Feedback::find($r->feedbackID);

        $feedbacks->name=$r->feedbackName;
        $feedbacks->email=$r->feedbackEmail;
        $feedbacks->feedback=$r->feedbackFeedback;
        $feedbacks->CategoryID=$r->CategoryID;
        $feedbacks->save();

        Return redirect()->route('showFeedback');
    }

    public function viewFeedback(){

        $viewFeedbacks=DB::table('feedback')
        ->get();

        Return view('viewFeedbacks')->with('feedback',$viewFeedbacks);
    }
}