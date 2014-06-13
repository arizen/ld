@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
                <div class="callout-box clearfix">  


                    

                    <div class="col-md-6 col-sm-6 col-xs-10">
                    <b style="margin-left:none; color:red; font-size:28px;">{{ $user->username }}</b><br /><br /><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e">
                    </div> 


                    <div class="col-md-6 col-sm-6 col-xs-10"> <div class="content-box content-style3">

        <div class="content-style3-icon icon-group"></div>
        <div class="content-style3-title">
            <h4 class="h4-body-title">Hakkımda</h4>
        </div>
        <div class="content-style3-text">
           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vehicula molestie ipsum, eget sollicitudin sapien hendrerit id. 
        </div>

</div>         </div> 
                
   


</div>
            </div>
        </div>
<div class="section-content section-tabs section-alter">
        <div class="tab-container">
    <div class="section-etabs-container">
        <ul class="section-etabs">
            <li class="tab active">
                <a href="#tabc1">Son 10 Maç</a>
            </li>
            <li class="tab">
                <a href="#tabc2">Yorumlar</a>
            </li>
            <li class="tab">
                <a href="#tabc3">Duo İstekleri (0)</a>
            </li>
            <li class="tab">
                <a href="#tabc4">Mesajlar (0)</a>
            </li>
              <li class="tab">
                <a href="#tabc5">Duolarım (0)</a>
            </li>
              <li class="tab">
                <a href="#tabc6">Kullanıcı Ayarları</a>
            </li>
        </ul>
    </div>
    <div class="container">

        <div class="tab-content">
            
            <div id="tabc1">
                <div class="row">
 asdasdklsajdhnasdsalkşdasdklsjda sdlksjad aslkdjas daslkdasd aslkdjasdalskjdasdasldkjasdlkjn


            </div></div>
            <div id="tabc2">
               <div class="row"></div>
        DENEME
                         </div>
            <div id="tabc3">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


 <div id="tabc4">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


            <div id="tabc5">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd123123123


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>


            <div id="tabc6">
                
                <div class="row">


        <!-- Üye Ayar Başlangıç -->
asdasdasd'+'^324234234324'


        <!-- Üye Ayar Bitiş -->



                </div>
            </div>




            
        </div>
    </div>
</div>    </div>

@stop