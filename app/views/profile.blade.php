@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
<div style="float: left; width: 50%;"><div style="position: relative; max-width: 620px;overflow: hidden; height: 230px;  background-size: cover; background-position: top; background-position-y: -30px; border-radius: 4px;background-color: rgb(36, 36, 36);">
     <div style="position: absolute; top: 30px;">
     <div style="float: left; width: 170px;margin-left: 15px;">
         <img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 170px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;">
         <div style="text-align: center;  color: #A8A8A8;    font: normal 16px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -3px;">Diamond II</div>
     </div> 
     <div style="float: left; margin-top: -5px; margin-left: 25px;min-width: 220px;max-width: 300px;">
         <span style="color: #AF9717; font-weight: bold;font: normal 36px &quot;Trebuchet MS&quot;,Arial,sans-serif;">LT WingmaN</span><hr class="space" style="background: url(http://lolturk.net/images/hr.png);  display: block;  height: 2px;  margin: 6px;  border: 0;  max-width: 600px;">
         <span style="color: #A8A8A8; font-size: 18px;font: normal 16px &quot;Trebuchet MS&quot;,Arial,sans-serif;">Zafer: <span class="win" style="color: rgb(67, 187, 134);">56</span> / Bozgun: <span class="loss" style="color: rgb(165, 79, 79);">46</span></span><br>
         <span class="last" style="color: #A8A8A8;  font-size: 18px;  font: normal 16px &quot;Trebuchet MS&quot;,Arial,sans-serif;">Son Oyun:<span class="win" style="color: rgb(67, 187, 134);"> Zafer</span></span>
         <hr class="space" style="background: url(http://lolturk.net/images/hr.png);  display: block;  height: 2px;  margin: 6px;  border: 0;  max-width: 600px;">
     </div>
     <div class="last" style="  font-size: 18px;  font: normal 16px &quot;Trebuchet MS&quot;,Arial,sans-serif;float: right;margin-top: -20px;margin-left: 75px;color: rgb(255, 215, 3);width: 110px;">
         <a href="#" class="ld-icon" style="background: url(http://leagueduo.com/images/ldicon.png);width: 32px;height: 32px;float: left;margin-right: 5px;background-size: 32px;margin-top: -4px;"></a>
         <span class="text">Puan<span class="win" style="color: rgb(221, 235, 211);"> 1290</span></span>
     </div>
     </div>
</div></div>

<div style="float: left; width: 50%;">
</div>





            </div>
        </div>
<div class="section-content section-tabs section-alter">
        <div class="tab-container">
    <div class="section-etabs-container">
        <ul class="section-etabs">
            <li class="tab active">
                <a href="#tabc1">Son 10 Maç</a>
            </li>
            <li class="tab">
                <a href="#tabc2">Yorumlar</a>
            </li>
            <li class="tab">
                <a href="#tabc3">Duo İstekleri (0)</a>
            </li>
            <li class="tab">
                <a href="#tabc4">Mesajlar (0)</a>
            </li>
              <li class="tab">
                <a href="#tabc5">Duolarım (0)</a>
            </li>
              <li class="tab">
                <a href="#tabc6">Kullanıcı Ayarları</a>
            </li>
        </ul>
    </div>
    <div class="container">

        <div class="tab-content">
            
            <div id="tabc1">
                <div class="row">

 @foreach($user->matches as $match)
     
<table width="100%" border="0">
  <tr>
    <td>{{ $match->champion }}</td>
    <td><p>{{$match->type}}</p>
    <p>{{ $match->result }}</p>
    <p>{{$match->time}}</p>
    <p>≈ {{$match->duration}}</p>
    </td>
    <td>{{$match->your_team}}</td>
    <td>{{$match->enemy_team}}</td>
  </tr>
</table>


 @endforeach

            </div></div>
            <div id="tabc2">
               <div class="row"></div>
        DENEME
                         </div>
            <div id="tabc3">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


 <div id="tabc4">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


            <div id="tabc5">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd123123123


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


            <div id="tabc6">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd'+'^324234234324'


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>




            
        </div>
    </div>
</div>    </div>

@stop