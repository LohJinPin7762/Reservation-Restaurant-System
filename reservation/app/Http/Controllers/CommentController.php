<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Comment;
use Session;
use App\Models\Category;

class CommentController extends Controller
{
    public function add(){
        $r=request();  //received the data by GET or POST mothod  
        $addComment=Comment::create([
            'name'=>$r->commentName,
            'email'=>$r->commentEmail,
            'CategoryID'=>$r->CategoryID,
            'comment'=>$r->commentText,
        ]);
        Session::flash('success',"Comment create successfully!");
        Return redirect()->route('showComment');
    }

    public function view(){
        //$viewProduct=Product::all();
        $viewComment=DB::table('comments')
        ->leftjoin('categories','categories.id','=','comments.CategoryID')
        ->select('comments.*','categories.name as catName')
        ->get();

        Return view('showComment')->with('comments',$viewComment);
    }

    public function delete($id){
        
        $deleteComment=Comment::find($id);
        $deleteComment->delete();
        Session::flash('success',"This Comment was delete successfully!");
        Return redirect()->route('showComment');
    }

    public function edit($id){ //Part A

        $comments=Comment::all()->where('id',$id);
        Return view('editComment')->with('comments',$comments)
                                  ->with('categoryID',Category::all());
    }

    public function update(){ //Part B
        $r=request();
        $comments =Comment::find($r->commentID);

        if($r->file('commentImage')!=''){
            $image=$r->file('commentImage');
            $image->move('images',$image->getClientOriginalName());
            $imageName=$image->getClientOriginalName();
            $comments->image=$imageName;
            }

        $comments->name=$r->commentName;
        $comments->email=$r->commentEmail;
        $comments->CategoryID=$r->CategoryID;
        $comments->comment=$r->commentText;
        $comments->save();

        Return redirect()->route('showComment');
    }

    public function viewComment(){

        $viewComments=DB::table('comments')
        ->get();

        Return view('viewComments')->with('comments',$viewComments);
    }


}
