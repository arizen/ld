@extends('layouts.default')
@section('content')

<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '748057568550130',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

{{ HTML::ul($errors->all()) }}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
 <div class="row">
 @include('sidebar')

<!-- Sağ İçerik -->
  <div class="col-md-9">
  <div class="profilei">
<h3 class="profilei-title">Duo İstekleri</h3>

<div></div>

<table width="100%" border="1">
  @foreach(Session::get("fromMeArray") as $duoRequest)
  <p> {{ $duoRequest->toUser->username }} {{ $duoRequest->duo->request_status }} </p>
  @endforeach

  @foreach(Session::get("duoModelArray") as $duoModel)
  <tr>
    <th scope="col"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{ $duoModel->fromUser->username }}</a></th>
    <th scope="col">{{$duoModel->fromSummoner->league}} {{$duoModel->fromSummoner->division}}</th>
    {{ Form::open(array('action' => 'DuoController@handleDuoRequest',)) }}
    <th scope="col">
      {{ Form::hidden('fi', $duoModel->fromUser->id) }}
      {{ Form::hidden('di', $duoModel->id) }}
      {{ Form::submit('Kabul Et', array('class' => 'btn btn-success btn-lg', 'value' => '1', 'name'=>'btn')) }}
    {{ Form::submit('Reddet', array('class' => 'btn btn-danger btn-lg', 'value' => '2', 'name' =>'btn')) }}
    </th>
    {{ Form::close() }}
  </tr>
  @endforeach
</table>

<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


