@extends('main')

@section('title', '| All post')

@section('content')
	<div class="row">
		<div class="col-md-8">
			<h2>All Blog post</h2>
		</div>
		<div class="col-md-2">
			<a href="{{ route('post.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table>
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Body</th>
					<th>Created At</th>
					<th></th>
				</thead>
				<tbody>
					@foreach($post as $po)
						<tr>
							<th> {{$po->id}}</th>
							<td>{{$po->title}}</td>
							<td>{{substr($po->body, 0,70)}} {{strlen($po->body)>50 ? "....": ""}}</td> 
							<td>{{
								date('M j, Y', strtotime($po->created_at))}}</td>
<td><a href="{{route('post.show', $po->id)}}" class="btn btn-default btn-sm">view</a>
							<a href="{{route('post.edit', $po->id)}}" class="btn btn-default btn-sm">Edit</a>
							</td>

						</tr>
					@endforeach
				</tbody>
			</table>
			<div class="text-center">
				{!! $post->links(); !!}
			</div>
		</div>

	</div>

@endsection