@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}

@if (Session::has('message'))
	<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
 <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    <div class="center-title">
                       
                     
                     <div class="col-md-6 col-sm-6">
                     {{ Form::open(array('action' => 'UserController@login', 'id'=>'signup')) }}
                                 
        <br /><center><h2>Giriş Yap </h2></center>
        <center>{{ Form::label('usernameLabel', 'Kullanıcı Adınız :') }} {{ Form::text('usernameText') }}
        {{ Form::label('passwordLabel', 'Şifreniz :') }}{{ Form::password('passwordText') }}      <br />  
        {{ Form::submit('Giriş Yap !', array('class' => 'btn btn-primary btn-lg')) }} </center>
    {{ Form::close() }}
                     </div>
                     <div class="col-md-6 col-sm-6">
                     {{ Form::open(array('action' => 'UserController@saveUser', 'id'=>'signup')) }}


        <br /><center><h2>Kayıt Olun.</h2></center>
        <center>  {{ Form::label('usernameLabel', 'Kullanıcı Adınız :') }} {{ Form::text('usernameText') }}
        {{ Form::label('emailLabel', 'E-Posta Adresiniz :') }} {{ Form::text('emailText') }}
        {{ Form::label('passwordLabel', 'Şifreniz :') }} {{ Form::password('passwordText') }}
        {{ Form::label('passwordLabel', 'Şifreniz (Tekrar) :') }} {{ Form::password('passwordText2') }}<br />                    
        {{ Form::submit('Kayıt Ol !', array('class' => 'btn btn-primary btn-lg')) }} </center>


       {{ Form::close() }}
                     </div>




                    </div>
                    <div class="divider divider-shadow"></div>
                </div>
        </div>
        </div>
 
@stop


