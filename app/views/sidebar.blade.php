<center> <div class="col-md-3"> <div class="profilei">
  {{ Form::open(array('action' => 'DuoController@sendDuoRequest')) }}
  {{ Form::submit('Duo Ekle', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}
<h3 class="profilei-title">Profil</h3>
<div style="text-shadow: 1px 1px 1px #000; color:#D74536; font: normal 34px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-bottom: 6px; margin-left:1px; margin-top:6px;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a></div>
<div style="position:static; top: 30px;"><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 200px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;"></div>        
  <div style="position:static; top: 30px;"><img src="http://leagueduo.com/static/league/{{Session::get('summoner')->league}}.png" style="height: 170px;" alt="{{Session::get('summoner')->league}}"></div>
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
