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

ASDASDASDASDDSADASD

<div></div>

<table width="100%" border="1">
  <tr>
    <th scope="col"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a></th>
    <th scope="col">{{Session::get('summoner')->league}} {{Session::get('summoner')->division}}</th>
    <th scope="col"><button type="button" class="btn btn-success btn-lg">Success</button> <button type="button" class="btn btn-danger btn-lg">Danger</button></th>
  </tr>
</table>

 


<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


