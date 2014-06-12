@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<center>
{{ Form::open(array('action' => 'UserController@checkStep1', 'id'=>'signup')) }}
{{ Form::label('summoner_nameLabel', 'Username') }} {{ Form::text('summoner_nameText') }}
<select name="serverBox" style="width:500px; height:50px; font-size:20px;">
<option value="North America">North America</option>
<option value="Europe West">Europe West</option>
<option value="Europe Nordic East">Europe Nordic East</option>
<option value="Brazil">Brazil</option>
<option value="Turkey">Turkey</option>
<option value="Russia">Russia</option>
<option value="Latin America North">Latin America North</option>
<option value="Latin America South">Latin America South</option>
</select>
{{ Form::submit('İleri', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}
</center>
@stop