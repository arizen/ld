@extends('layouts.default')
@section('content')

<script src="http://leagueduo.com/js/jquery.watable.js"></script>
<link rel="stylesheet" href="http://leagueduo.com/css/watable.css">


	 <div class="container">
        
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    <div class="center-title">
                        <p>
<img src="http://leagueduo.com/images/slider1.png" width="1000">
                        </p>                       
                    </div>
                    <div class="divider divider-shadow"></div>
                </div>
        </div>
        
         <div class="row">
            <div class="col-md-12 col-sm-12">

<table class="table hover">
                    <thead>
                        <tr>
                          <th><center>Sıralama</center></th>
                          <th><center>Sihirdar Adı</center></th>
                          <th><center>KDA Ratio</center></th>
                          <th><center>League Duo Puanı</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                          <td><center>{{ $key + 1 }}</center></td>
                          <td> <center><a href='http://leagueduo.com/profile/{{ $user->username }}'>{{ $user->username }} </a></center></td>
                          <td><center> {{$user->summoners()->first()->kda}} </center></td>
                          <td><center>{{ $user->ld_points }}</center></td>
                        </tr>
                        @endforeach

                        
                      </tbody>
                </table>                

            </div>
            </div>
    </div>
@stop