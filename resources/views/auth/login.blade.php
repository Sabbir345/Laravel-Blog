@extends('main')

@section('title' , '| Login')

@section('content')

	<div class="row">
		<div class="col-md-6 col-mdoffset-3">
			{!! Form::open() !!}

				{{ Form::label('email', 'Email:')  }}
				<br>
				{{ Form::email('email', null ,['class'=>'from-control'])  }}
				<br>
				{{ Form::label('password', 'Password:')  }}
				<br>
				{{ Form::password('password',['class'=>'from-control']) }}
				<br>

				{{ Form::checkbox('remember')}}{{ Form::label('remember', 'Remember Me')}}
				<br>
				{{ Form::submit('Login', ['class'=>'btn btn-primary btn-block'])  }}

			{!! Form::close() !!}

		</div>
	</div>

@endsection