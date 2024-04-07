<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    private $post ;
    public function __construct()
    {
        $this->post = new Post();
    }
    //Using MySQL   prepare statement
    public function getAllPosts()
    {
       $posts = $this->post->getPosts();
    //    dd($posts);
        return view('posts.listPosts', ['posts' => $posts]);
    }
    public function getOnePost()
    {
        $posts = DB::table('posts')->where('id', 10)->get();
 
        return view('posts.listPosts', ['posts' => $posts]);
    }

    public function create(){
        return view('posts.add');
    }
    public function store(Request $request){
        $title = $request->input('title');
        $description = $request->input('description');
        $post = new Post();
        $post->create($title, $description); 
        return redirect(route('post'));
    }
    public function update($id){
        $post = $this->post->getOnePost($id);
        return view('posts.update', compact('post'));
    }
    // public function storeUpdate(Request $request){
    //     $id = 51;
    //     $dataUpdate = [
    //         $title = $request->input('title'),
    //         $description = $request->input('description'),
    //     ];

    //     // dd($dataUpdate);
    //     $this->post->updatePost($id,$dataUpdate);
    //     return redirect(route('post'));
    // }
    public function storeUpdate(Request $request){
        $id = 51;
        $title = $request->input('title');
        $description = $request->input('description');

        // dd($dataUpdate);
        $this->post->updatePost($id,$title, $description);
        return redirect(route('post'));
    }
    public function delete($id){
        $this->post->deletePost($id);
        return redirect(route('post'));
    }
      //Using PDO   prepare statement


   
}