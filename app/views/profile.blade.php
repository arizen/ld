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
 <center> <div class="col-md-3"> <div class="profilei">
<h3 class="profilei-title">Profil</h3>
<div style="text-shadow: 1px 1px 1px #000; color:#D74536; font: normal 34px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-bottom: 6px; margin-left:1px; margin-top:6px;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a></div>
<div style="position:static; top: 30px;"><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 200px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;"></div>        
  <div style="position:static; top: 30px;"><img src="http://elo-boost.net/images/tiers/challenger_1.png" style="height: 170px;"></div>
   <div style="color: black; font: normal 26px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -10px; margin-left:1px; margin-bottom:15px;">Diamond II</div>
            
<div id='profilemsol'>
<ul>
   <li><a href='http://leagueduo.com/comments/{{Session::get('user')->username}}'><span>Yorumlar</span></a></li>
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

@if ($match->result  == 'Win')
 <table width="100%" border="0" bgcolor="#002100">
  <tr>
    <th scope="col" bgcolor="#002100"><img src="http://leagueduo.com/static/champions/{{$match->champion}}.jpg" height="175" width="100" /></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->result }}<p>  </center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center> <p>{{ $match->type }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->time }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="10%"><center><p>{{ $match->duration }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="30%"><center><p>{{ $match->your_team }}<p></center></th>
    <th scope="col" bgcolor="#002100" width="30%"><center><p>{{ $match->enemy_team }}<p></center></th>
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
    @foreach(ViewHelperController::stringToOneByOneArray($match->your_team,";") as $player)
            <th scope="col" bgcolor="#210000" width="30%"><center><p>{{ $player }}<p></center></th>
    @endforeach
    
    <th scope="col" bgcolor="#210000" width="30%"><center><p>{{ $match->enemy_team }}<p></center></th>
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


