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
<h3 class="profilei-title">Hakkımda</h3>
<p>DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME</p>
<p>DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME</p>
<p>DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME</p>
<div class="clear"></div>		
</div>
<div class="profilei">
<h3 class="profilei-title">Son 10 Maç</h3>  
@foreach( Session::get('summoner')->matches as $match)

@if ($match->result  == 'Win')
 <table width="100%" border="0" bgcolor="#002100">
  <tr>
    <th scope="col" bgcolor="#002100"><img src="http://leagueduo.com/static/champions/{{$match->champion}}.jpg" height="175" width="100" /></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->result }}<p>  </center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center> <p>{{ $match->type }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->time }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->duration }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="30%">@foreach(ViewHelperController::stringToOneByOneArray($match->your_team,";") as $player)
<center><p>{{ $player }}<p></center>
    @endforeach</th>
    <th scope="col" bgcolor="#002100" width="30%">@foreach(ViewHelperController::stringToOneByOneArray($match->enemy_team,";") as $player)
<center><p>{{ $player }}<p></center>
    @endforeach</th>
  </tr>
</table>
<div style="height:10px; weight:100%; background-color:black;"></div>
@elseif ($match->result == 'Loss')
 <table width="100%" border="0" bgcolor="#210000">
  <tr>
    <th scope="col" bgcolor="#210000"><img src="http://leagueduo.com/static/champions/{{$match->champion}}.jpg" height="175" width="100" /></th>
    <th scope="col" bgcolor="#210000" width="10%"><center><p>{{ $match->result }}<p></center></th>
    <th scope="col" bgcolor="#210000" width="10%"><center> <p>{{ $match->type }}<p></center></th>
    <th scope="col" bgcolor="#210000" width="10%"><center><p>{{ $match->time }}<p></center></th>
    <th scope="col" bgcolor="#210000" width="10%"><center><p>{{ $match->duration }}<p></center></th>
           <th scope="col" bgcolor="#210000" width="30%"> @foreach(ViewHelperController::stringToOneByOneArray($match->your_team,";") as $player)
<center><p>{{ $player }}<p></center>
    @endforeach
    </th>

    <th scope="col" bgcolor="#210000" width="30%">@foreach(ViewHelperController::stringToOneByOneArray($match->enemy_team,";") as $player)
<center><p>{{ $player }}<p></center>
    @endforeach</th>
  </tr>
</table>
<div style="height:10px; weight:100%; background-color:black;"></div>
@endif
@endforeach
   <div
  class="fb-like"
  data-send="true"
  data-width="450"
  data-show-faces="true">
</div>

<p>DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME</p>
<div class="clear"></div>		
</div>


										</div>
</div>



            </div>
        </div>


@stop


