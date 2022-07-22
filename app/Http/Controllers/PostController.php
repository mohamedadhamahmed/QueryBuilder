<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //

    public function create(){
        return view('posts.create');
    }


    public function insert(Request $request){


        DB::table('_posts')->insert(['title'=>$request->title,'body'=>$request->body]);
        return redirect()->route('post.posts');
    }


    public function index(){
$data=DB::table('_posts')->get();
return view('posts.index',compact('data'));

    }



    public function updata($id){
$post=DB::table('_posts')->where('id',$id)->first();
return view('posts.edit',compact('post'));


    }




public function edit(Request $request){
    $post=DB::table('_posts')->where('id',$request->id)->update(['title'=>$request->title,'body'=>$request->body]);
    
    
    return redirect()->route('post.posts');
}



public function delete($id){

DB::table('_posts')->where('id',$id)->delete();

return redirect()->route('post.posts');

}

public function deleteall(){
   // DB::table('_posts')->delete();


   DB::table('_posts')->truncate ();

    return redirect()->route('post.posts');
}

}
