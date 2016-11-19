<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        if( \Auth::user()->id==1)            $check=1;
        else {
  $check=35;
            }
        $posts=Post::latest()->get();
        return view('basic.home',  compact('posts','check')) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basic.create',  compact('posts')) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request )
    {   //Auth::user();
        $input = $request->all();
        $input['created_at']=Carbon::now();
        Post::create($input);
        
        return redirect('posts') ; 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts=Post::find($id);
        return view('basic.show',  compact('posts')) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::findOrFail($id);
        return view('basic.edit',  compact('post'));
        
        
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( $id,CreatePostRequest $request)
    {
        
        $post=Post::findOrFail($id);
        $post->update($request->all());
        return redirect('posts');;
        
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
