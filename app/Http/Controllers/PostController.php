<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $allposts = [
            ['id' => 1, 'title' => 'MVC', 'posted_by' => 'sherif', 'created_at' => '2020-04-03'],
            ['id' => 2, 'title' => 'Java', 'posted_by' => 'Shawky', 'created_at' => '2021-05-04'],
            ['id' => 3, 'title' => 'PHP', 'posted_by' => 'Moaawad', 'created_at' => '2022-06-05'],
            ['id' => 4, 'title' => 'CSS', 'posted_by' => 'Ali', 'created_at' => '2023-07-06']
        ];

        $postsFromDB = Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }
    public function show($id){
        $singlePost = Post::findorfail($id);
        return view('posts.show', ['post' => $singlePost]);
    }
}
