@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<center>
{{ Form::open(array('action' => 'UserController@checkStep2', 'id'=>'signup')) }}
      <input type="radio" name="avatar_id" value="avatar1"> <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Acolyte-Lee-Sin-icon.png" height="128" width="128">
      <input type="radio" name="avatar_id" value="avatar2">  <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Skarner-icon.png" height="128" width="128"> 
      <input type="radio" name="avatar_id" value="avatar3">  <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Acolyte-Lee-Sin-icon.png" height="128" width="128"> <br />
      <input type="radio" name="avatar_id" value="avatar4">  <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Skarner-icon.png" height="128" width="128">
      <input type="radio" name="avatar_id" value="avatar5">  <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Acolyte-Lee-Sin-icon.png" height="128" width="128"> 
      <input type="radio" name="avatar_id" value="avatar6">  <img src="http://icons.iconarchive.com/icons/fazie69/league-of-legends/512/Skarner-icon.png" height="128" width="128"> <br /> 
      {{ Form::submit('İleri', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}

</center>
@stop