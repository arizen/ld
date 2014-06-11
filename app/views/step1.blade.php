@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<center>
{{ Form::open(array('action' => 'UserController@checkStep1', 'id'=>'signup')) }}

{{ Form::submit('Ekle', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}
</center>
@stop