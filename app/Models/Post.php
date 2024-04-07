<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Post extends Model
{
    use HasFactory;

    // public function getPosts()
    // {
    //     $posts = DB::select('SELECT * FROM posts');
    //     return $posts;
    //     // dd($posts);
    // }
    // public function getOnePost($id){
    //     $post = DB::select('SELECT * FROM posts WHERE id = ?', [$id]);
    //     // dd($post);
    //     return $post; 
    // }
    
    // public function create($title, $description){
    //     $post =  DB::insert('INSERT INTO posts (title, description) VALUES (?, ?)', [$title, $description]);
    // }
    
    // public function updatePost($id, $data){
    //     $data[] = $id;
    //     DB::update('UPDATE posts SET title = ?, description = ? WHERE id = ?', $data);
    // }
    
    // public function deletePost($id){
    //     DB::delete('DELETE FROM posts WHERE id = ?', [$id]);
    // }
    // User PDO prepare statement 
    public function getPosts()
    {
        $posts = DB::table('posts')->get();
        return $posts;
    }
    public function getOnePost($id){
        $post = DB::table('posts')->where('id', $id)->get();
        return $post; 
    }
    
    public function create($title, $description){
        $post =  DB::insert('INSERT INTO posts (title, description) VALUES (?, ?)', [$title, $description]);
    }
    
    public function updatePost($id, $newTitle, $newDescription){
        DB::table('posts')->where('id', $id)->update(['title' => $newTitle, 'description' => $newDescription]);
    }
    public function deletePost($id){
        DB::table('posts')->where('id', $id)->delete();
    }
}