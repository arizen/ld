   <div class="container">

            <div class="row header">


 <!-- Logo -->
                
                
                <div class="col-md-2 col-sm-4 col-xs-4 logo">
                    <a href="/">
                        <img src="/images/logo.png" alt="League Duo"/>
                    </a>
                </div>
                
                <!-- //Logo// -->


                <!-- Navigation File -->
                <div class="col-md-10">

                    <!-- Mobile Button Menu -->
                    <div class="mobile-menu-button">
                        <i class="icon-reorder"></i>
                    </div>
                    <!-- //Mobile Button Menu// -->


              <!--- MENÜ -->

                    <nav>
                        <ul class="navigation">
                            <li>
                                <a href="/">
                                    <span class="label-nav">
                                        Ana Sayfa
                                    </span>
                                </a>
                            
                            </li>
                            <li>
                                <a href="/blog">
                                    <span class="label-nav">
                                       Blog
                                    </span>
                                </a>
                             
                            </li>
                              <li>
                                <a href="/oduller">
                                    <span class="label-nav">
                                        Ödüller
                                    </span>
                                </a>
                             
                            </li>@if (Session::has('id'))
    
  <li style="margin-left:100px; float:right;">
                                <a href="/logout">
                                    <span class="label-nav">
                                        Çıkış Yap
                                    </span>
                                </a>
                         
                            </li>
@else

                            <li>
                                <a href="/login">
                                    <span class="label-nav">
                                        Giriş Yap / Kayıt Ol
                                    </span>
                                </a>
                            </li>
                          

@endif
                        </ul>

                    </nav>

                    <!-- Mobile Nav. Container -->
                    <ul class="mobile-nav">
                        <li class="responsive-searchbox">
                            <!-- Responsive Nave -->
                            <form action="#" method="get">
                                <input type="text" class="searchbox-inputtext" id="searchbox-inputtext-mobile" name="s" />
                                <button class="icon-search"></button>
                            </form>
                            <!-- //Responsive Nave// -->
                        </li>
                    </ul>
                    <!-- //Mobile Nav. Container// -->
                </div>
                <!-- Nav -->
            </div>



        </div>     