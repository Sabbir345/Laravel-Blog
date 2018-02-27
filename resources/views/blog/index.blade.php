@extends('main')

@section('title','| Blog')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>Blog</h1>
		</div>
	</div>
	@foreach($post as $po)
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<h2>{{$po->title}}</h2>
				<h5>Published: {{date('M j, Y', startotime($po->created_at))}}</h5>
				<p>{{substr($po->body, 0, 250)}}{{strlen($po->body)>250 ? '.....' : "" }}</p>
				<a href="{{ route('blog.single',$po->id)}}" class="btn btn-primary">Read More</a>
			</div>
		</div>
	@endforeach
	<div>
		<div class="col-md-12">
			<div class="text-center">
				{{ $post->links() }}
			</div>
		</div>
	</div>
	

@endsection