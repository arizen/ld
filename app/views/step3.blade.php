@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<div class="alert alert-warning" style="float:center;"><strong>İLETİŞİM BİLGİSİ VERMEK ZORUNLU DEĞİLDİR TAMAMLA! DİYEREK GEÇEBİLİRSİNİZ.</strong></div>
<center>
{{ Form::open(array('action' => 'UserController@checkStep3', 'id'=>'signup')) }}
  {{ Form::label('skypeLabel', 'Skype (Zorunlu Değildir)') }} {{ Form::text('skypeText') }}
  {{ Form::submit('Tamamla !', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}

</center>
@stop