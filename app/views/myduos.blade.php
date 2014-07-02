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
<h3 class="profilei-title">Duolarım</h3>

<table class="table hover">
                    <thead>
                        <tr>
                          <th><center>Kullanıcı Adı</center></th>
                          <th><center>Sihirdar Adı</center></th>
                          <th><center>KDA Ratio</center></th>
                          <th><center>League Duo Puanı</center></th>
                             <th><center>Durum</center></th>
                          <th><center></center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center>deneme</center></td>
                          <td> <center>deneme2</center></td>
                          <td><center>33/2</center></td>
                          <td><center>200</center></td>
                          <td><center>Online</center></td>
                          <td><center>Sil !  -  Mesaj Gönder !</center></td>
                        </tr>

                        
                      </tbody>
                </table>

<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


