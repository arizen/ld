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
   <div style="color: black; font: normal 26px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -10px; margin-left:1px; margin-bottom:15px;">{{Session::get('summoner')->league}} {{Session::get('summoner')->division}}</div>
            
<div id='profilemsol'>
<ul>
   <li><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}/comments'><span>Yorumlar</span></a></li>
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
<h3 class="profilei-title">Yorumlar</h3>
<div class="testimonial-vertical">

    <div class="testimonial-vertical-pics">
        <ul>
                        <li>
                <a href="#accord-3">
                    <img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" alt="John Doe"/>
                </a>
            </li>
                    </ul>
    </div>

    <!-- Arrow -->
    <div class="testimonial-vertical-arrow"></div>
    <!-- Arrow -->

    <div class="testimonial-vertical-content">
                    <div class="testimonial-vertical-text" id="accord-3">
                <div>
                    Cras sem erat, aliquet in egestas cursus sem erat, ullamcorper vitae ligula. Nunc commodo lacinia eros ac condimentum Nunc commodo lacinia eros ac condimentu
                </div>
                <div class="testimonial-vertical-author">
                    <a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a>
                </div>
                <div class="testimonial-vertical-author-position">
                      {{Session::get('summoner')->league}} {{Session::get('summoner')->division}}
                </div>
            </div>
            </div>

</div>
<div style="height:10px; weight:100%;"></div>
   <div class="divider divider-shadow"></div>
<p style="font-size:22px; margin-left:10px; font-type:bold;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a> hakkındaki görüşleriniz :</p>
   <form action="s" style="">

<textarea style="width:100%; height:100px;" name="yorum" cols="" rows=""></textarea> <br />
<input style="margin-top:15px;" class="btn btn-primary btn-lg" name="submit" type="submit" />

</form>

<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


