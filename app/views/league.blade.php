@extends('layouts.default')
@section('content')

 <!-- Coaching  -->
   <section class="block gray-block" id="coaching">
      <div class="container">
         <header>
            
            <span class="line"></span>
         </header>
         <div class="row">
            @foreach(Session::get("userArray") as $user)
                                                         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 coach-wrapper">
                  
                  <div class="coach-box">
                     <header>
                        
                        <span class="coach-name">{{$user->username}}</span><br /><br />
                        <div class="coach">
                           <img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" class="photo">
                        </div>
                                                <img src="http://leagueduo.com/static/league/{{$user->summoners()->get()->first()->league}}.png" style="height: 120px;" alt="{{$user->summoners()->get()->first()->league}}"><br />
                       <p style="color:white; font-weight:bold;">{{ $user->summoners()->get()->first()->league}} {{$user->summoners()->get()->first()->division }} </p>                      </header>

                <div class="perk center">
                        <div class="content">
                           <span style="font-weight: bold;">
                                                                                     <center>    ONLINE   </center>
                                                         </span>
                        </div>
                     </div>
                     <div class="perk center">
                        <div class="content">
                           <span>
                                                            <small style="font-weight: bold;">
                               <center> <span style="color: rgb(51, 153, 102);">{{ $user->summoners()->get()->first()->kda }}</span> </center>  </small>
                           </span>
                        </div>
                     </div>
                     <div class="perk center">
                        <div class="content">
                           <span style="font-weight: bold;"><center><span style="font-size:15px;">250</span> <img src="/images/ldicon.png" width="36" height="36"></center></span>
                        </div>
                     </div>

                     <a href='http://leagueduo.com/profile/{{$user->username}}' class="btn btn-default">PROFİLİ GÖRÜNTÜLE !</a>
                  </div>
                
               </div>
                 @endforeach
                                                        
                        </div>
                     </div>

                 
                     </div>
      </div>
   </section>

@stop