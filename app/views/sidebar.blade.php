<center> <div class="col-md-3"> <div class="profilei">

  @if(Session::get("id") == null)
  <form action="http://leagueduo.com/login">
    <input type="submit" class="btn btn-primary btn-lg"  value="Duo Ekle">
  </form>
  @elseif(UserController::isHisProfile())
  @elseif(!DuoController::didUserAddThisUser())
  {{ Form::open(array('action' => 'DuoController@sendDuoRequest')) }}
  {{ Form::submit('Duo Ekle', array('class' => 'btn btn-primary btn-lg')) }}
  {{ Form::close() }}
  <form action="http://leagueduo.com/profile/{{Session::get('user')->username}}/sendMessage">
    <input type="submit" class="btn btn-primary btn-lg"  value="Mesaj Yolla">
  </form>

  @elseif(DuoController::didUserAddThisUser() == "Beklemede")
    Beklemede
  @elseif(DuoController::didUserAddThisUser() == "Kabul Edildi")
    Kabul Edildi
  @elseif(DuoController::didUserAddThisUser() == "Reddedildi")
    Kabul Edildi
  @endif
<h3 class="profilei-title">Profil</h3>
<div style="text-shadow: 1px 1px 1px #000; color:#D74536; font: normal 34px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-bottom: 6px; margin-left:1px; margin-top:6px;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a></div>
<div style="position:static; top: 30px;"><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 200px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;"></div>        
  <div style="position:static; top: 30px;"><img src="http://leagueduo.com/static/league/{{Session::get('summoner')->league}}.png" style="height: 170px;" alt="{{Session::get('summoner')->league}}"></div>
   <div style="color: black; font: normal 26px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -10px; margin-left:1px; margin-bottom:15px;">{{Session::get('summoner')->league}} {{Session::get('summoner')->division}}</div>
            
<div id='profilemsol'>
<ul>
   <li><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}/comments'><span>Yorumlar</span></a></li>
   @if( UserController::isHisProfile() )
   <li><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}/messages'><span>Mesajlarım ( {{ MessageController::getUnreadMessageCount()}} )</span></a></li>
   <li><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}/duos'><span>DUO İsteklerim ( {{ DuoController::getDuoRequestCount() }} )</span></a></li>
   <li class='last'><a href='#'><span>Destek Al</span></a></li>
   @endif
</ul>
</div> 

<table class="table hover">
                    <thead>
                        <tr>
                          <th><center>Ranked</center></th>
                          <th><center>İstatistikleri</center></th>

                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><center> <b>Toplam Oyun :</b></center></td>
                          <td> <center>{{Session::get('stat')->games_played}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Katledilenler :</b></center></td>
                          <td> <center>{{Session::get('stat')->kills}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Ölümler :</b></center></td>
                          <td> <center>{{Session::get('stat')->deaths}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Asistler :</b></center></td>
                          <td> <center> {{Session::get('stat')->assists}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Öldürülen Yaratık :</b></center></td>
                          <td> <center>{{Session::get('stat')->minions_killed}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Kazanılan Altın :</b></center></td>
                          <td> <center>{{Session::get('stat')->gold_earned}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>2 de 2 :</b></center></td>
                          <td> <center>{{Session::get('stat')->double_kills}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>3 te 3 :</b></center></td>
                          <td> <center>{{Session::get('stat')->triple_kills}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>4 te 4 :</b></center></td>
                          <td> <center>{{Session::get('stat')->quadra_kills}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>5 te 5 :</b></center></td>
                          <td> <center>{{Session::get('stat')->penta_kills}}</center></td>
                        </tr>
                        <tr>
                          <td><center><b>Yıkılan Kuleler :</b></center></td>
                          <td> <center>{{Session::get('stat')->turrets_destroyed}}</center></td>
                        </tr>


                        
                      </tbody>
                </table>          


<div class="clear"></div>		
</div></div>
  </center>
