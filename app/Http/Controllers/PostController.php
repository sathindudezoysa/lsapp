<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//getting the databse model to connect to database
use App\Models\Post;
use DB;

 /*

    index --> listing all post
    create -> append form
    store -> submitting it to the database
    edit -> 
    update ->
    show -> showing posts
    destroy -> delete post

    All these files will create automatically by :
    'php artisan make:Controller --resource'
*/

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //getting all data to a variyable
        $posts =  Post::all();
        return view('posts.index')->with('posts', $posts);


        /*
        Adding multiple tables
        $posts = Post::orderBy('title', 'asc')->paginate(1);
        */

        /*
        get data by odering them 
        $post = Post::orderBy('title', 'asc')->get();
        */

        /*
        get search in the database
        $post = Post::where('title', 'Post Two')->get();
        */

        /*
        geting limited number of posts
        $post = Post::where('title', 'Post Two')->take(1)->get();
        */

        

        /*
        Using SQL quries 
        add 'use DB' at top
        $post = DB::select('SELECT * FROM posts');
        */

       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/post')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post =  Post::find($id);

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit') -> with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
