<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\Post;

class DatatablesController extends Controller
{
    public function posts()
    {
        $query = Post::select('id', 'title', 'body', 'created_at');

        return Datatables::of($query)
            ->make(true);
    }
}
