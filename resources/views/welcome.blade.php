@extends('main')

@section('title' ,' | Homepage')


@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron">
                  <h1>Hello, world!</h1>
                  <p>...</p>
                  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="post">

                  @foreach($post as $posts)
                     <h3>{{$posts->title}}</h3>
                     <p>{{$posts->body}}</p>
                     <a href="route('blog.single',$post->id)" class="btn btn-primary">Read More</a>
                  @endforeach
                  
                </div>
                <hr>
                
            </div>

            <div class="col-md-3 col-md-offset-1">
                <h3>Sidebar</h3>
            </div>

        </div>
@endsection
   