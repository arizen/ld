@extends('layouts.default')
@section('content')


<center>
{{ Form::open(array('action' => 'UserController@login', 'id'=>'signup')) }}
{{ Form::label('summoner_nameLabel', 'Sihirdar Adınız') }} {{ Form::text('summoner_nameText') }}
<select name="serverBox" style="width:500px; height:50px; font-size:20px;">
<option value="Turkey">Türkiye</option>
<option value="North America">Kuzey Amerika</option>
<option value="Europe West">Batı Avrupa</option>
<option value="Europe Nordic East">Doğu Avrupa</option>
<option value="Brazil">Brezilya</option>
<option value="Russia">Rusya</option>
<option value="Latin America North">Latin Amerika Kuzey</option>
<option value="Latin America South">Latin Amerika Güney</option>,
<option value="Ocean">Okyanusya</option>
</select>
{{ Form::submit('Ekle', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}
</center>
@stop