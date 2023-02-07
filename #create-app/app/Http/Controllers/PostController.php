<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    function index()
    {
        $posts = DB::table('posts')->get();
        return view('post.index', compact('posts'));
        // return view('post.index', ['data' => $posts]);
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
        return redirect()->route('index-post');
    }

    function edit($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        return view('post.edit', compact('post'));
        // return $post;
    }

    function update(Request $data, $id)
    {
        DB::table('posts')->where('id', $id)->update([
            'title' => $data->title,
            'body' => $data->body
        ]);
        // return $id;
        // return redirect('index-post');
        // return response('Added Post Success');
        // return redirect('post');
        return redirect()->route('index-post');
    }

    function distroy($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        // return $id;
        return redirect()->route('index-post');
    }

    function distroyAll()
    {
        DB::table('posts')->delete();
        return redirect()->route('index-post');
    }


    function distroyAllTruncate()
    {
        DB::table('posts')->truncate();
        return redirect()->route('index-post');
    }
}
