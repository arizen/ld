<!DOCTYPE html>

    <html class="no-js"> <!--<![endif]-->
    <head>
        @include('includes.head')
        
        
        </head>
<body>  



<div id="wrapper"  >

<div class="top_wrapper">

    <!-- Header -->
    <header id="header">
  	@include('includes.menu')
    </header>
    <!-- //Header// -->
    
<center><img href="media/rev-images/lolduo.png" position="center" /></center></div><!--.top wrapper end -->

<div class="loading-container">
    <div class="loading">
        <i></i><i></i>
    </div>
    <div class="loading-fallback">
         <img src="images/loading.gif" alt="Loading"/>
    </div>
    <div class="loading-text">
        Sayfa Yükleniyor...
    </div>
</div>


<div class="content-wrapper hide-until-loading"><div class="body-wrapper">

   @yield('content')



</div>



</div><!--.content-wrapper end -->
<footer>
    <div class="footer">
        
@include('includes.footer')
        
    </div>
</footer>

</div><!-- wrapper end -->
<script type="text/javascript" src="js/_jq.js"></script>
<script type="text/javascript" src="js/_jquery.placeholder.js"></script>
<script src="js/activeaxon_menu.js" type="text/javascript"></script> 
<script src="js/animationEnigne.js" type="text/javascript"></script> 
<script src="js/bootstrap.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/easypiecharts.js" type="text/javascript"></script> 
<script src="js/ie-fixes.js" type="text/javascript"></script> 
<script src="js/jquery.base64.js" type="text/javascript"></script> 
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script> 
<script src="js/jquery.cycle.js" type="text/javascript"></script> 
<script src="js/jquery.cycle2.carousel.js" type="text/javascript"></script> 
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script> 
<script src="js/jquery.easytabs.js" type="text/javascript"></script> 
<script src="js/jquery.eislideshow.js" type="text/javascript"></script> 
<script src="js/jquery.flexslider.js" type="text/javascript"></script> 
<script src="js/jquery.infinitescroll.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.js" type="text/javascript"></script> 
<script src="js/jquery.parallax-1.1.3.js" type="text/javascript"></script> 
<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script> 
<script src="js/jQuery.scrollPoint.js" type="text/javascript"></script> 
<script src="js/jquery.themepunch.plugins.min.js" type="text/javascript"></script> 
<script src="js/jquery.themepunch.revolution.js" type="text/javascript"></script> 
<script src="js/jquery.tipsy.js" type="text/javascript"></script> 
<script src="js/jquery.validate.js" type="text/javascript"></script> 
<script src="js/jQuery.XDomainRequest.js" type="text/javascript"></script> 
<script src="js/retina.js" type="text/javascript"></script> 
<script src="js/timeago.js" type="text/javascript"></script> 
<script src="js/tweetable.jquery.js" type="text/javascript"></script> 
<script src="js/zeina.js" type="text/javascript"></script> 
    
</body>
</html>
