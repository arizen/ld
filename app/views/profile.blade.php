@extends('layout')
@section('content')

{{ HTML::ul($errors->all()) }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Profile of {{$user['username']}}</h1>
<div class="row">
  <div class="col-md-4">
  	<h2>User Information</h2>
<table>
  		<tr>
  			<td>
			Summoner Name : 
			</td>
			<td>
 			{{ $user['summoner_name'] }} 
 			</td>
 		</tr>

 		<tr>
  			<td>
			Server : 
			</td>
			<td>
 			{{ $user['server'] }} 
 			</td>
 		</tr>

 		<tr>
  			<td>
			League : 
			</td>
			<td>
 			{{ $user['league'] }} 
 			</td>
 		</tr>

 		<tr>
  			<td>
			Division : 
			</td>
			<td>
 			{{ $user['division'] }} 
 			</td>
 		</tr>
 		
 		
 	</table>

 </div>
 @if ( Session::get('id') == $user['id'] )
 
	<div class="col-md-4">
		<h2> Duo Requests </h2>
 		@foreach($user->duos as $duo)
 			@if($duo->request_status == 'Pending')
 				{{ Form::open(array('action' => 'DuoController@handleDuoRequest')) }}
 				{{ Form::hidden('duo_id', $duo['id']) }}
 				<p> <a href='/lolduo/public/profile/{{$duo->from_id}}'> {{  DuoController::getUsernameFromDuo($duo) }} </a> {{ Form::submit("Accept", array("name"=>"accept_button", "value"=>"accept")) }} {{ Form::submit("Reject", array("name"=>"accept_button", "value"=>"reject")) }} </p>
 				{{ Form::close() }}
 			@endif
 		@endforeach
	</div>
@endif


</div>
@if ( Session::get('id') == $user['id'] )
<p> {{Form::button('Update')}} </p>
@else
{{ Form::open(array('action' => 'DuoController@sendDuoRequest')) }}
{{ Form::hidden('user_id', $user['id']) }}
<p> {{Form::submit('Add Duo')}} </p>
{{ Form::close() }}
@endif

@stop