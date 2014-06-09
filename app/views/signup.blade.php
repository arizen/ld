@extends('layout')
@section('content')

{{ HTML::ul($errors->all()) }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

        <h1>Sign Up</h1>

        	{{ Form::open(array('action' => 'UserController@saveUser')) }}
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
 				{{ Form::label('emailLabel', 'E-mail') }}
 			</td>
 			<td>
 				{{ Form::text('emailText') }}
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

 	</table>
  </div>
  <div class="col-md-6">

  	<table>
  		<tr>
  			<td>
			{{ Form::label('summonerLabel', 'Summoner Name') }}
			</td>
			<td>
 			{{ Form::text('summonerText') }}
 			</td>
 		</tr>

 		<tr>
  			<td>
			{{ Form::label('serverLabel', 'Server') }}
			</td>
			<td>
 			{{ Form::select('serverBox', ['North America'=>'North America', 'Europe West'=>'Europe West', 'Europe Nordic East'=>'Europe Nordic East', 'Brazil'=>'Brazil', 'Turkey'=>'Turkey', 'Russia'=>'Russia', 'Latin America North'=>'Latin America North', 'Latin America South'=>'Latin America South']) }}
 			</td>
 		</tr>

 		<tr>
  			<td>
			{{ Form::label('leagueLabel', 'League') }}
			</td>
			<td>
 			{{ Form::select('leagueBox', ['Bronze'=>'Bronze', 'Silver'=>'Silver', 'Gold'=>'Gold', 'Platinum'=>'Platinum', 'Diamond'=>'Diamond']) }}
 			</td>
 		</tr>

 		<tr>
  			<td>
			{{ Form::label('divisionLabel', 'Division') }}
			</td>
			<td>
 			{{ Form::select('divisionBox', ['I'=>'I', 'II'=>'II', 'III'=>'III', 'IV'=>'IV', 'V'=>'V']) }}
 			</td>

 		</tr>
 		<tr>
 			<td>{{ Form::submit('OK') }}</td> </tr>
 		
 	</table>
  </div>
</div>
 
	{{ Form::close() }}

@stop