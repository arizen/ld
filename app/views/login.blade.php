@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

        <h1>Login</h1>
	{{ Form::open(array('action' => 'UserController@login')) }}
<div class="row">
<div class="col-md-6">

  	<table>
  		<tr>
  			<td>
			{{ Form::label('usernameLabel', 'Username') }}
			</td>
			<td>
 			{{ Form::text('usernameText') }}
 			</td>
 		</tr>

 		<tr>
  			<td>
			{{ Form::label('passwordLabel', 'Password') }}
			</td>
			<td>
			{{ Form::password('passwordText') }}
 			</td>
 		</tr>

 		<tr>
 			<td>{{ Form::submit('Login') }}</td> </tr>
 		
 	</table>
 </div>
</div>
	{{ Form::close() }}
@stop