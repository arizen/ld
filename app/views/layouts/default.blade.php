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

    
</body>
</html>
