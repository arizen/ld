@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
 <div class="row">
 <center> <div class="col-md-3"> <div class="profilei">
<h3 class="profilei-title">Profil</h3>
<div style="text-shadow: 1px 1px 1px #000; color:#D74536; font: normal 34px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-bottom: 6px; margin-left:1px; margin-top:6px;">{{Session::get('user')->username}}</div>
<div style="position:static; top: 30px;"><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 200px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;"></div>        
  <div style="position:static; top: 30px;"><img src="http://elo-boost.net/images/tiers/challenger_1.png" style="height: 170px;"></div>
   <div style="color: black; font: normal 26px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -10px; margin-left:1px; margin-bottom:15px;">Diamond II</div>
            
<div id='profilemsol'>
<ul>
   <li class='active'><a href='index.html'><span>Yorumlar</span></a></li>
   <li><a href='#'><span>Mesajlarım (0)</span></a></li>
   <li><a href='#'><span>DUO İsteklerim (0)</span></a></li>
   <li class='last'><a href='#'><span>Destek Al</span></a></li>
</ul>
</div> 
<div class="istatistik" style="margin-top:20px;" >
                <table >
                    <tr>
                        <td>
                            Ranked İstatistikleri
                        </td>
                           <td>
                           
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Toplam Oyun :
                        </td>
                        <td>
                          {{Session::get('stat')->games_played}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Katledilenler :
                        </td>
                        <td>
                           {{Session::get('stat')->kills}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Ölümler :
                        </td>
                        <td>
                          {{Session::get('stat')->deaths}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Asistler :
                        </td>
                        <td>
                            {{Session::get('stat')->assists}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                           Öldürülen Yaratık :
                        </td>
                        <td>
                            {{Session::get('stat')->minions_killed}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Kazanılan Altın :
                        </td>
                        <td>
                            {{Session::get('stat')->gold_earned}}
                        </td>
                      
                    </tr>
                     <tr>
                        <td >
                           2 de 2 :
                        </td>
                        <td>
                            {{Session::get('stat')->double_kills}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           3 te 3 :
                        </td>
                        <td>
                            {{Session::get('stat')->triple_kills}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           4 te 4 :
                        </td>
                        <td>
                           {{Session::get('stat')->quadra_kills}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           5 te 5 :
                        </td>
                        <td>
                            {{Session::get('stat')->penta_kills}}
                        </td>
                      
                    </tr>
                    <tr>
                        <td >
                           Yıkılan Kuleler :
                        </td>
                        <td>
                            {{Session::get('stat')->turrets_destroyed}}
                        </td>
                      
                    </tr>
                 
                </table>
            </div>   
<div class="clear"></div>		
</div></div>
  </center>

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
 <p>{{ $match->id }}<p>
@endforeach
   <div id="fb-root"></div>
   <script>
   window.fbAsyncInit = function() {
   FB.init({appId: '748057568550130', status: true, cookie: true,
   xfbml: true});
   };
   (function() {
   var e = document.createElement('script'); e.async = true;
   e.src = document.location.protocol +
   '//connect.facebook.net/en_US/all.js';
   document.getElementById('fb-root').appendChild(e);
   }());
   </script>

      <script type="text/javascript">
    $(document).ready(function(){
    $('#share_button').click(function(e){
    e.preventDefault();
    FB.ui(
    {
    method: 'feed',
    name: 'This is the content of the "name" field.',
    link: ' http://www.hyperarts.com/',
    picture: 'http://www.hyperarts.com/external-xfbml/share-image.gif',
    caption: 'This is the content of the "caption" field.',
    description: 'This is the content of the "description" field, below the caption.',
    message: ''
    });
    });
    });
      </script>
<img id="#share_button" src="http://www.tabpress.com/fbui_share/share_button.png">
<p>DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME DENEME</p>
<div class="clear"></div>		
</div>


										</div>
</div>



            </div>
        </div>


@stop


