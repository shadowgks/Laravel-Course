<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    function index()
    {
        $posts = DB::table('posts')->get();
        // return view('post.index', ['data' => $posts]);
        return view('post.index', compact('posts'));
    }

    function create()
    {
        return view('post.create');
    }

    function store(Request $data)
    {
        DB::table('posts')->insert([
            'title' => $data->title,
            'body' => $data->body,
        ]);
        return response('Succes');
    }


}
