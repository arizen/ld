@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<center>
{{ Form::open(array('action' => 'UserController@checkStep3', 'id'=>'signup')) }}
  {{ Form::label('summoner_nameLabel', 'Skype') }} {{ Form::text('summoner_nameText') }}
  {{ Form::submit('Tamamla !', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}

</center>
@stop