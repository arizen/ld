@extends('layouts.default')
@section('content')


<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/pagination/css/tsc_pagination.css" />

<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
 <div class="row">



<section class="block gray-block" id="coaching">
      <div class="container">
         <div class="row">
                                                         <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 coach-wrapper">
                  <div class="coach-box">
                     <header>
                        <div class="coach-price"></div>
                        <span class="coach-name">{{Session::get('user')->username}}</span><br /><br />
                        <div class="coach">
                           <img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" class="photo">
                        </div>
                                                <img src="http://leagueduo.com/static/league/{{Session::get('summoner')->league}}.png" style="height: 120px;" alt="{{Session::get('summoner')->league}}"><br />
                        <p style="color:black; font-weight:bold;">{{Session::get('summoner')->league}} {{Session::get('summoner')->division}} </p>                    </header>

                     <div class="perk center">
                        <div class="content">
                           <span>
                                                                                     <center>    <img src="http://fc03.deviantart.net/fs70/f/2013/172/7/d/button__online_by_spiderblare-d69zy0y.png" height="35px" width="170px">    </center>
                                                         </span>
                        </div>
                     </div>
                     <div class="perk center">
                        <div class="content">
                           <span>
                                                            <small>
                                KDA VS                    </small>
                           </span>
                        </div>
                     </div>
                     <div class="perk center">
                        <div class="content">
                           <span>BİRŞEYLER GELİR SANIRIM</span>
                        </div>
                     </div>

                     <a href='http://leagueduo.com/profile/{{Session::get('user')->username}}' class="btn btn-default">PROFİLİ GÖRÜNTÜLE !</a>
                  </div>
               </div>
                                                        
                        </div>
                     </div>

                 
                     </div>
      </div>
   </section>



   <ul class="tsc_pagination tsc_paginationA tsc_paginationA01">
  <li><a href="#" class="first">First</a></li>
  <li><a href="#" class="previous">Previous</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#" class="current">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#" class="next">Next</a></li>
  <li><a href="#" class="last">Last</a></li>
</ul>

</div>



            </div>
        </div>







<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/pagination/css/tsc_pagination.css" />



        
        
    </div>

@stop