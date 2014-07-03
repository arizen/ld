@extends('layouts.default')
@section('content')
<!-- DC Ken Burns Panel Slider CSS -->
<link rel="stylesheet" type="text/css" href="/deneme.css" media="screen" />
 
<!-- DC Javascript Library -->
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.min.js"></script> <!-- jQuery Library (do not call twice on same page) -->
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/jquery.easing.js"></script> <!-- jQuery Easing (do not call twice on same page) -->
 
<!-- DC Ken Burns Panel Slider JS -->
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/js/jquery.waitforimages.js"></script>
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/js/jquery.cssAnimate.mini.js"></script>
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/js/jquery.touchwipe.min.js"></script>
 
<script type="text/javascript" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/js/jquery.templateaccess.kenburns-panel.min.js"></script>


<!-- DC Ken Burns Panel Slider Settings -->
<script type="text/javascript">
$(function() {    
    $('.kbpanel-bannercontainer').kenburn({
 
        thumbWidth:70, // thumbnail width
        thumbHeight:40, // thumbnail height
         
        thumbAmount:4,  // number of thumbnails to show
        thumbStyle:"both",   // thumb, bullet, none, both
        thumbVideoIcon:"on", // show a video icon for video content: off, on
         
        thumbVertical:"bottom",
        thumbHorizontal:"center",                           
        thumbXOffset:0,
        thumbYOffset:40,
        bulletXOffset:0,
        bulletYOffset:-16,
        hideThumbs:"on",
        touchenabled:'on',  // allow touch swipe (suitable for mobile devices): on, off
        pauseOnRollOverThumbs:'off', // pause slider when mouse over thumbnail
        pauseOnRollOverMain:'on', // pause slider when mouse over slider
        preloadedSlides:2, // number of slides to preload during startup
         
        timer:5, // time before next slide (5 = 5 seconds)
         
        debug:"off",                        
         
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        //                                               Google Fonts !!                                             //
        // local GoogleFont JS from your server: http://www.yourdomain.com/kb-plugin/js/jquery.googlefonts.js        //
        // GoogleFonts from Original Source: http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js or https:... // 
        //          PT+Sans+Narrow:400,700                                                                          //
        /////////////////////////////////////////////////////////////////////////////////////////////////////////////
        googleFonts:'Oswald',
        googleFontJS:'http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/js/jquery.googlefonts.js'
    });
         
         
    $('.tnone').click(function() {
        $('.tbull').removeClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').addClass('selected');
        $('.tauto').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'hidden'});
        $('.thumbbuttons').css({'visibility':'hidden'});        
    });
     
    $('.tthumb').click(function() {
        $('.tbull').removeClass('selected');
        $('.tauto').removeClass('selected');
        $('.tthumb').addClass('selected');
        $('.tnone').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'visible'});
        $('.thumbbuttons').css({'visibility':'hidden'});
        $('body').addClass('tp_showthumbsalways');
        $('.kenburn_thumb_container').animate({'opacity':1},{duration:300,queue:false});
         
    });
     
    $('.tauto').click(function() {
        $('.tauto').addClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').removeClass('selected');
        $('.tbull').removeClass('selected');
        $('body').removeClass('tp_showthumbsalways');
        $('.kenburn_thumb_container').css({'visibility':'visible'});
        $('.thumbbuttons').css({'visibility':'hidden'});
        setTimeout(function() {
            $('.kenburn_thumb_container').animate({'opacity':0},{duration:300,queue:false});
        },100);
         
    });
     
    $('.tbull').click(function() {
        $('.tbull').addClass('selected');
        $('.tauto').removeClass('selected');
        $('.tthumb').removeClass('selected');
        $('.tnone').removeClass('selected');
        $('.kenburn_thumb_container').css({'visibility':'hidden'});
        $('.thumbbuttons').css({'visibility':'visible'});        
    });
     
    $('body').addClass('tp_showthumbsalways');
    $('.tthumb').click();
         
});
</script>



<!-- DC Ken Burns Panel slider Start -->
<div style="width:70%; margin:0 auto; padding:10px; position:relative;"> <!-- define slider container width (by strict force) -->
  <div class="demoholder">
    <div class="bggradient"></div>
    <!-- <div class="kbpanel-bannercontainer centerme light"> light theme -->
    <div class="kbpanel-bannercontainer centerme dark">
      <ul>
        <!-- Slide 1 -->
        <li data-transition="fade" data-startalign="right,bottom" data-zoom="in" data-zoomfact="3" data-endAlign="center,top" data-panduration="12" data-colortransition="4"><img alt="" src="http://fc03.deviantart.net/fs70/f/2010/166/9/0/maisonnette_1900px_by_styloide.jpg" data-bw="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image1_blur.jpg" data-thumb="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/thumb1.jpg">
          <div class="creative_layer">
            <div class="cp-left faderight" >
              <p class="cp-title">Ken Burns Panel Slider</p>
              <p>Supports IE, Firefox, Chrome, Safari, Opera.</p>
              <p>The ultimate ken burns slider is here.<br />
                Supports URLs, YouTube/Vimeo Videos<br />
                multiple transition effects, transparent<br />
                panels, bullets/thumbs and more! <br /></p>
              <a style="margin-top:10px" class="kb-button" href="#">See More</a>
              <div class="clear"></div>
            </div>
          </div>
        </li>
         
        <!-- Slide 2 -->
        <li data-transition="slide" data-startalign="right,top" data-zoom="out" data-zoomfact="1.5" data-endAlign="left,bottom" data-panduration="8" data-colortransition="4"><img alt="" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image2.jpg" data-bw="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image2_blur.jpg" data-thumb="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/thumb2.jpg">
          <div class="video_kenburner">
            <div class="video_kenburn_wrap">
              <div class="video_video">
                <iframe class="video_clip" src="http://player.vimeo.com/video/4749536?title=0&byline=0&portrait=0"></iframe>
              </div>
              <div class="video_details">
                <p class="cp-title">Vimeo Video</p>
                <p>Watch sample embedded Vimeo video.<br /></p>
                <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                <div class="clear"></div>
              </div>
              <div class="close"></div>
            </div>
          </div>
          <div class="creative_layer ">
            <div class="cp-right fade">
              <p class="cp-title">Vimeo Support</p>
              <p>This slider supports embedded content.<br />
                Click the play button to play a sample video.<br />
              </p>
              <a style="margin-top:10px" class="kb-button" href="#">See More</a>
              <div class="clear"></div>
            </div>
          </div>
        </li>
         
        <!-- Slide 3 -->
        <li data-transition="slide" data-startalign="left,bottom" data-zoom="in" data-zoomfact="3" data-endAlign="center,center" data-panduration="8" data-colortransition="4"><img alt="" src="http://leagueduo.com/images/slider1.png" data-bw="http://leagueduo.com/images/slider1.png" data-thumb="http://leagueduo.com/images/slider1.png">
          <div class="creative_layer ">
            <div class="cp-bottom fadeup">
              <p class="cp-title">Did You Know?</p>
              <p>The Ken Burns effect is a popular name for a type of panning and zooming effect used in video production from still imagery.</p>
            </div>
          </div>
        </li>
         
        <!-- Slide 4 -->
        <li data-transition="fade" data-startalign="right,top" data-zoom="out" data-zoomfact="1.2" data-endAlign="left,bottom" data-panduration="11" data-colortransition="4"><img alt="" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image4.jpg" data-bw="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image4_blur.jpg" data-thumb="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/thumb4.jpg">
          <div class="creative_layer ">
            <div class="cp-top fadedown" >
              <p class="cp-title">Your Portfolio, Revealed.</p>
              <p>Showcase your work and bring still images to life!</p>
            </div>
          </div>
        </li>
         
        <!-- Slide 5 -->
        <li data-transition="fade" data-startalign="center,top" data-zoom="in" data-zoomfact="1.6" data-endAlign="center,bottom" data-panduration="12" data-colortransition="4"><img alt="" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image5.jpg" data-bw="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/image5_blur.jpg" data-thumb="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/thumb5.jpg">
          <div class="video_kenburner">
            <div class="video_kenburn_wrap">
              <div class="video_video">
                <iframe class="video_clip" src="http://www.youtube.com/embed/FG0fTKAqZ5g?hd=1&wmode=opaque&autohide=1&showinfo=0"></iframe>
              </div>
              <div class="video_details">
                <p class="cp-title">Youtube Video</p>
                <p>YouTube Video</p>
                <p>This is a sample YouTube video.</p>
                <a style="margin-top:10px" class="kb-button" href="#">See More</a>
                <div class="clear"></div>
              </div>
              <div class="close"></div>
            </div>
          </div>
          <div class="creative_layer ">
            <div class="cp-left fade">
              <p class="cp-title">YouTube Support</p>
              <p>Click to Play!</p>
              <p>This innovative slider supports<br />
                YouTube content. Click to play!</p>
              <a style="margin-top:10px" class="kb-button" href="#">See More</a>
              <div class="clear"></div>
            </div>
          </div>
        </li>
      </ul>
    </div> <!-- /kbpanel-bannercontainer -->
    <!-- Banner Shadow Effect -->
    <div class="bannershadow centerme"><img width="100%" height="40px" src="http://www.dreamtemplate.com/dreamcodes/sliders/kbpanel-slider/images/bannershadow.png"></div>
  </div> <!-- /demoholder -->
   
</div> 
<!-- DC Ken Burns Panel slider End -->
<div class="tsc_clear"></div> <!-- line break/clear line -->



    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                    <div class="process-container">
        
    <div class="single-process ">
        <div class="process-step">
            1
        </div>
        <div class="process-details">
            <i class="icon-lightbulb"></i>
            <div class="process_text">
                <h4>Idea</h4>
                <p>Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                                ligula. Nunc commodo lacinia eros ac condimentum</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process ">
        <div class="process-step">
            2
        </div>
        <div class="process-details">
            <i class="icon-compass"></i>
            <div class="process_text">
                <h4>Strategy</h4>
                <p>Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                                ligula. Nunc commodo lacinia eros ac condimentum</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process ">
        <div class="process-step">
            3
        </div>
        <div class="process-details">
            <i class="icon-laptop"></i>
            <div class="process_text">
                <h4>Design</h4>
                <p>Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                                ligula. Nunc commodo lacinia eros ac condimentum</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process  last">
        <div class="process-step">
            4
        </div>
        <div class="process-details">
            <i class="icon-code"></i>
            <div class="process_text">
                <h4>Coding</h4>
                <p>Cras sem erat, aliquet in egestas cursus, ullamcorper vitae
                                                ligula. Nunc commodo lacinia eros ac condimentum</p>
            </div>
        </div>
    </div>
    
    </div>            
            </div>
        </div>
    </div>




<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
 <div class="row">
 <div class="col-md-3"> <div class="profilei">
<h3 class="profilei-title">Neden Lig DUO ?</h3>

Riot games tarafından ortaya çıkartılan istatistikler sonucunda takım çalışmasına önem gösteren oyuncular günde 1.7 milyon daha fazla oyun kazanıyor ve takım çalışması altında oynanılan oyunlarda %54 daha fazla kazanma oranı sağlanıyor. Takım çalışması genellikle duo şeklinde oyuna giren oyuncularda görülüyor. Fakat oyuna tek girdiğiniz zaman 4 tane hiç tanımadığınız, ruh halini dahi bilmediğiniz insanlarla oynarsınız. Bu durum %20 oranında iletişim bozukluğuna sebep olur. İşte burada league duo devreye giriyor. Sitemizin bünyesinde bulunan yüzlerce oyuncu arasından size en  yakın lig sıralamasına sahip oyuncuyu buluyoruz. Ve web sitemizin en güzel özelliklerinden birisi ile de birbirlerinizle iletişime geçmesi çok kolay bir hal alıyor. Tek yapmanız gereken siteye üye olup, sitenin online kullanıcılarından birisini kendinize duo olarak seçmek kalıyor. Sitemizde üyelerin sıralaması ise LD yani leagueduo point üzerinden yapılıyor. Sitemize kaydolduktan sonra, kaydolduğunuz hesap ile kazandığınız her oyun başına 5 ldp, kaybettiğiniz her oyun başına da 3 ldp azaltıyor. Bu özelliklerin yanı sıra sitemize üye olup aktif bir şekilde siteyi kullanan üyeleri her hafta süpriz ödüller bekliyor. Her haftasonu yapılan çekiliş ile birinciye 1780 RP, ikinciye 840 RP, üçüncüye 400 RP verilecektir. Sitenizdeki sıralamaınızı da ödüller sekmesinden bakabilirsiniz

                    <div class="clear"></div>   
</div>

</div>

<!-- Sağ İçerik -->
  <div class="col-md-6">
  <div class="profilei">
<h3 class="profilei-title">Lig Seçin</h3>
<div class="alert alert-info">
    <strong>Hoşgeldiniz!</strong> aşağıdan lig seçerek DUOnuzu aramaya başlayabilirsiniz.</div>

<a href="/lig"><img src="/static/league/Challenger.png" height="250" width="250"></a>
  <a href="/lig"><img src="/static/league/Diamond.png" "250" width="250"></a>
  <a href="/lig"><img src="/static/league/Platinum.png" "250" width="250"></a>


 <a href="/lig"><img src="/static/league/Gold.png" "250" width="250"></a>
<a href="/lig"><img src="/static/league/Silver.png" "250" width="250"></a>
<a href="/lig"><img src="/static/league/Bronze.png" "250" width="250"></a>
<div class="clear"></div>		
</div>



										</div>

<div class="col-md-3"> <div class="profilei">
<h3 class="profilei-title">Profil</h3>

asdasd

										<div class="clear"></div>		
</div>
 <div class="profilei">
<h3 class="profilei-title">Hall of Fame</h3>

<table class="table hover">
                    <thead>
                        <tr>
                          <th><center>Sıralama</center></th>
                          <th><center>Kullanıcı Adı</center></th>
                          <th><center>LD Puanı</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $key=>$user)
                        <tr>
                          <td><center>{{ $key + 1 }}</center></td>
                          <td> <center>{{ $user->username }}</center></td>
                          <td><center> {{ $user->ld_points }}</center></td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>          

                    <div class="clear"></div>   
</div>
 <div class="profilei">
<h3 class="profilei-title">Reklam Alanı</h3>

sadsadasdadadasdasdadasdasdasd

                    <div class="clear"></div>   
</div></div>





</div>



            </div>
        </div>


@stop


