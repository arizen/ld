   <div class="container">

            <div class="row header">


 <!-- Logo -->
                
                
                <div class="col-md-2 col-sm-4 col-xs-4 logo">
                    <a href="index.html">
                        <img src="images/logo.png" alt="Zeina HTML5 Theme"/>
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
                                <a href="index.html">
                                    <span class="label-nav">
                                        Ana Sayfa
                                    </span>
                                </a>
                            
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label-nav">
                                       Blog
                                    </span>
                                </a>
                             
                            </li>
                              <li>
                                <a href="oduller.html">
                                    <span class="label-nav">
                                        Ödüller
                                    </span>
                                </a>
                             
                            </li>@if (Session::has('id'))
    
  <li style="margin-left:100px; float:right;">
                                <a href="#">
                                    <span class="label-nav">
                                        Çıkış Yap
                                    </span>
                                </a>
                         
                            </li>
@else

                            <li>
                                <a href="#">
                                    <span class="label-nav">
                                        Giriş Yap
                                    </span>
                                </a>
                          <ul>  {{ Form::open(array('action' => 'UserController@login', 'id'=>'signup')) }}
                                 
        <br /><center><h2>Yeni bir deneyime hazır mısın? </h2></center>
        <center>{{ Form::label('usernameLabel', 'Username') }} {{ Form::text('usernameText') }}
        {{ Form::label('passwordLabel', 'Password') }}{{ Form::password('passwordText') }}      <br />  
        {{ Form::submit('Login', array('class' => 'btn btn-primary btn-lg')) }} </center>
    {{ Form::close() }}</ul>
                            </li>
                          
                            <li>
                                <a href="#" >
                                    <span class="label-nav">
                                     Kayıt Ol
                                    </span>
                                </a>
                                <ul>
                    {{ Form::open(array('action' => 'UserController@saveUser', 'id'=>'signup')) }}


        <br /><center><h2>Duonuzu Bulmanın Zamanı Geldi.</h2></center>
        <center>  {{ Form::label('usernameLabel', 'Username') }} {{ Form::text('usernameText') }}
        {{ Form::label('emailLabel', 'E-mail') }} {{ Form::text('emailText') }}
        {{ Form::label('passwordLabel', 'Password') }} {{ Form::password('passwordText') }}
        {{ Form::label('passwordLabel', 'Password (Tekrar)') }} {{ Form::password('passwordText2') }}<br />                    
        {{ Form::submit('OK', array('class' => 'btn btn-primary btn-lg')) }} </center>


       {{ Form::close() }}
                                </ul>
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