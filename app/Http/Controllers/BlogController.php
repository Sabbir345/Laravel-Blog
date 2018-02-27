<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class BlogController extends Controller
{
    public function getIndex(){
    	$posts = Post::paginate(2);

    	return view('blog.index')->withPosts($posts);
    }

    public function getSingle(){
    	
    	//fetch from the DB based on slug

	    $post = Post::where('slug','=', $slug)->get();

	    // return the view and pass in the post object

	    return view('blog.single')->withPost('$post');
    }
}