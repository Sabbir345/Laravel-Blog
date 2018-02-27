@extends('main')

@section('title' , '| Register')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			{!! Form::open(array('route' => 'register.post' , 'data-parsly-validate' => '')) !!}

				{{ Form::label('name', 'Name:')  }}
					<br>
				{{ Form::text('name', null ,['class'=>'from-control'])  }}
					<br>

				{{ Form::label('email', 'Email:')  }}
					<br>
				{{ Form::email('email', null , ['class'=>'from-control']) }}
					<br>
				{{ Form::label('password', 'Password:')  }}
					<br>
				{{ Form::password('password',['class'=>'from-control']) }}
					<br>
				{{ Form::label('password_confirmation', 'Confirm Password:')  }}
					<br>
				{{ Form::password('password_confirmation',['class'=>'from-control']) }}
					<br>
				{{ Form::submit('Register', ['class'=>'btn btn-primary btn-block form-spacing-top'])  }}

				

			{!! Form::close() !!}

		</div>
	</div>

@endsection