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

@foreach($queries as $query)
    <div class="testimonial-vertical-content">
                    <div class="testimonial-vertical-text" id="accord-3">
                <div>
                  {{ $query->content }}
                </div>
                <div class="testimonial-vertical-author">
                    <a href='http://leagueduo.com/profile/{{$query->username}}'>{{$query->username}}</a>
                </div>
                <div class="testimonial-vertical-author-position">
                      {{$query->league}} {{$query->division}}
                </div>
            </div>
            </div>
            @endforeach

</div>

<div style="height:10px; weight:100%;"></div>
   <div class="divider divider-shadow"></div>
   @if(CommentController::userCanWriteComment())
<p style="font-size:22px; margin-left:10px; font-type:bold;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a> hakkındaki görüşleriniz :</p>
{{ Form::open(array('action' => 'CommentController@writeComment')) }}
<textarea style="width:100%; height:100px;" name="yorum" cols="" rows=""></textarea> <br />
<input style="margin-top:15px;" class="btn btn-primary btn-lg" name="submit" type="submit" />
{{ Form::close() }}
@elseif(!DuoController::doUsersAreDuos())
Duo değilsiniz.
@else
Yorum yazmıştınız.
@endif


<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


