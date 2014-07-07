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
<h3 class="profilei-title">Duolarım</h3>

  
  

                <!-- <form class="form-wrapper" id="contact-form" method="post" novalidate role="form"> -->
                  {{ Form::open(array('action' => 'MessageController@sendMessage' , 'class' => 'form-wrapper')) }}
                    <div class="contactus-form1-row">
                        <input type="text" id="name" name="subject" data-errmsg="Name *" minlength="2" placeholder="Konu"
                               required/>
                    </div><br />
                    <div class="contactus-form1-row">
                        <textarea name="content" id="message" placeholder="Mesaj *" required></textarea>
                    </div><br />
                    <div class="contactus-form1-row">
                        {{ Form::submit('Yolla', array('class' => 'btn btn-primary btn-lg')) }}
                     <!--   <input type="submit" height="50px" value="Send" class="btn btn-primary btn-full-width"/> -->
                    </div>
                    {{ Form::close() }}
                <!-- </form> -->




<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


