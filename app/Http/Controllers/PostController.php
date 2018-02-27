<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post = Post::orderby('id','desc')->paginate(2);

        return view('post.index')->withPost($post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
            'title' => 'required| max:255',
            'slug' => 'required | min:5 | max:255',
            'body'  => 'required '
            ));
        //store in the database

        $post = new Post;

        $post->title = $request->title;
        $post->slug =  $request->slug;
        $post->body =  $request->body;

        $post->save();
        //redirect to anather page

        Session::flash('success', 'the blog post was sucessfully save!');

        return redirect()->route('post.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('post.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find the post in the database and save as var
         $post= Post::find($id);

        // return the view and pass i9n the var we previously created 
         return view('post.edit')->withPost($post);
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
        //validate the data 
        $post = Post::find($id);
        if($request->input('slug')==$post->slug)
        {
            $this->validate($request, array(
            'title' => 'required| max:255',
            'body'  => 'required'
         ));

        }
        else
        {
            $this->validate($request, array(
            'title' => 'required| max:255',
            'slug' => 'required | alpha_dash | min:5 | max:255 | unique:post,slug',
            'body'  => 'required '
            ));
        } 

         
        //save the data to database
         $post = Post::find($id);

         $post->title = $request->input('title');
         $post->slug = $request->input('slug');
         $post->body = $request->input('body');

         $post->save();

        //set flash data with success message
         session::flash('success', 'This post was successfully saved');
        // redirect with flash data to post.show
         return redirect()->route('post.show',$post->id);
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
         $post = Post::find($id);
         $post->delete();
         session::flash('success','The post was successfully delete');

        return redirect()->route('post.index');
    }
}
