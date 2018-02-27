@extends('main')
@section('title', '| ConatactPage')



@section('content')
        <div class="row">
            <div class="col-md-12">
                <h3>Contact me</h3>
                <hr>
            	<form>
            		<div class="form-group">
            			<label name="email">Email: </label>
            			<input id="email" name="email" class="form-control">
            		</div>
            		<div class="form-group">
            			<label name="subject">Subject: </label>
            			<input id="email" name="subject" class="form-control">
            		</div>
            		<div class="form-group">
            			<label name="message">Message: </label>
            			<textarea id="message" name="message" class="form-control">Text here </textarea>
            		</div>
            		<input type="submit" name="submit" value="Submit" class="btn btn-success">
            	</form>
            </div>
        </div>
    @endsection