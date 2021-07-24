<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Post;
use App\Models\User;
class BlogController extends Controller
{
    //
    public function index(){
        $blogs=Post::all();
    
        return view('blogs.index', [
            'posts' => $blogs
        ]);
    }

    public function show($post){
        $post=Post::find($post);
       
        return view('blogs.show',[
            'post' => $post
        ]) ;
    }

    public function create(){
       
       $users=User::all();
    
        return view('blogs.create',[
            'users'=>$users
        ]);
    }

    public function store(Request $myRequestObject){
        //$requestObject=request();
        $data=$myRequestObject->all();
        // $post=Post::create([
        //     'title' =>$data['title'],
        //     'description' => $data['description']
    
        // ]);
        Post::create($data);
       
        return redirect()->route('blogs.index');
    }



    public function showAlertMsg($post){
        $post=Post::find($post);
        return view('blogs.showAlertMsg',[
            'post' => $post
        ]) ;
    }


    public function destory($post){
        $post=Post::find($post);

      // dd($post['id'],'mohoh');
    Post::where('id',$post['id'])->delete();

       return redirect()->route('blogs.index');
    
    }


    public function edit($post){
        $post=Post::find($post);
        $users=User::all();
        return view('blogs.edit',[
            'post' => $post,
            'users'=>$users
        ]) ;

    }

    public function update($post ,Request $myRequestObject ){
        $data=$myRequestObject->all();
       
        Post::find($post)->update([
            'title' =>$data['title'],
            'description' => $data['description'],
            'user_id' => $data['user_id']
        ]);

        return redirect()->route('blogs.index');
    }
}
