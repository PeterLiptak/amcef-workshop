<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Yajra\Datatables\Datatables;

use App\Post;

class PostsController extends Controller
{
    public function index() 
    {

        $posts = [
            'post1',
            'post2',
            'post3'
        ];

        // $posts = Post::all();
    
        // $posts = DB::table('posts')->get();
        // return $posts; 
    
        return view('welcome', compact('posts'));
    }

    public function edit($id) 
    {

        return 'Post' . $id . ' edit';
    }

    public function data()
    {
        $query = Post::select('id', 'title', 'body', 'created_at');

        return Datatables::of($query)
            ->make(true);
    }
}
