@extends('main')

@section('title' , '| view post')

@section('content')
  <div class="row">

	<div class="col-md-8">
		<h1>{{ $post->title }} </h1>
		<p class="lead" > {{ $post->body }} </p>
	</div>

	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
				<label>Url: </label>
				<p><a href="{{url('blog/'.$post->slug)}}">{{url($post->slug)}}</a></p>
			</dl>
			<dl class="dl-horizontal">
				<label>Create At: </label>
				<p>{{date('M j,Y h:ia',strtotime($post->created_at))}}</p>
			</dl>
			<dl class="dl-horizontal">
				<label>Updated At: </label>
				<p>{{date('M j,Y h:ia',strtotime($post->updated_at))}}</p>
			</dl>
			<div class="row">
				<div class="col-sm-6">
					{!!Html::linkRoute('post.edit','Edit',array($post->id),array('class' =>'btn btn-primary btn-block'))!!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['post.destroy',$post->id], 'method'=>'DELETE'])!!}
					{!!Form::submit('Delete', ['class'=>'btn btn-danger btn-block']) !!}
			{!!Form::close() !!}
					
				</div>
		</div>
		</div>
	</div>

</div>
 
	
@endsection