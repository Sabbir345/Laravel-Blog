<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$post = Post::orderBy('id','desc')->limit(4)->get();
		return view("welcome")->withPost($post);
	}

	public function getAbout(){

		$first= "sabbir" ;
		$second="ahmad";

		$full = $first . " ". $second;

		return view("about");
	}
	public function getContact(){
	return view("contact");
	}
}