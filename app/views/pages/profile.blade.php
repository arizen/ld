@extends('layouts.default')
@section('content')
{{ HTML::ul($errors->all()) }}

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

	  <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
                <div class="callout-box clearfix">  
    <div class="sol"><img src="http://2.bp.blogspot.com/-QNSOqcH9ytU/TsnGM64faAI/AAAAAAAAAMk/6any0GmZFyU/s380/brights_icon_75x75.gif" alt="Üye Avatar"></div>
                    <div class="sag"><div class="ssdivici" ><b style="color:#2772db; font-size:20px;">Güncel Ligim:</b><p style="color:#f7b53b;">ALTIN III</p></div> <div class="ssdivici" ><b style="color:#2772db; font-size:20px;">LD Puanım:</b><p style="color:red;">200 LDP</p></div><div class="ssdivici" ><b style="color:#2772db; font-size:20px;">Son Maçım:</b><p style="color:green;">Galibiyet</p></div></div>
</div>
            </div>
        </div>
        <div class="space-sep40"></div>
 
    
    
    <div class="container">
 <div class="tab-container tabs-vertical" >
        <ul class="etabs ">
                        
                <li class="tab">
                    <a href="#tab1"><i class=icon-leaf></i>Profil Ayarları</a>
                </li>
                
                        
                <li class="tab">
                    <a href="#tab2"><i class=icon-compass></i>Lig Seçin</a>
                </li>
            
              <li class="tab">
                    <a href="#tab5"><i class=icon-heart></i>Duo İstekleri (2)</a>
                </li>
            
            <li class="tab">
                    <a href="#tab4"><i class=icon-list-alt></i>Son 10 Maçım</a>
                </li>
            
            <li class="tab">
                    <a href="#tab3"><i class=icon-envelope-alt></i>Mesajlarım (0)</a>
                </li>
           
                
                        
           
                
                    </ul>            
            
        <div class="tabs-content">
                            <div id="tab1">
               	<form id="signup">
		<h1>Profil Ayarları</h1>
		E-Posta Adresiniz :<input type="email" placeholder="info@leagueduo.com" required="">
		Şifreniz :<input type="password" placeholder="Şifrenizi yazınız." required="yes">
                    	E-Posta Adresiniz :<input type="email" placeholder="info@leagueduo.com" required="">
		Şifreniz :<input type="password" placeholder="Şifrenizi yazınız." required="yes">
                    	E-Posta Adresiniz :<input type="email" placeholder="info@leagueduo.com" required="">
		Şifreniz :<input type="password" placeholder="Şifrenizi yazınız." required="yes">
		Şifreniz (Tekrar) :<input type="password" placeholder="Şifrenizi Tekrar Yazınız." required="yes">					
		<button type="submit">Güncelle ! </button>	
	</form>
                </div>
                            <div id="tab2">
                <p style:"margin-left:25px;"><img src="http://elo-boost.net/images/tiers/challenger_1.png" width="200" height="200" /> &nbsp;&nbsp;&nbsp; <img src="http://elo-boost.net/images/tiers/diamond_1.png" width="200" height="200" /> &nbsp;&nbsp;&nbsp; <img src="http://elo-boost.net/images/tiers/platinum_1.png" width="200" height="200" /> </p>

                                 <p style:"margin-left:25px;"><img src="http://elo-boost.net/images/tiers/gold_1.png" width="200" height="200" /> &nbsp;&nbsp;&nbsp; <img src="http://elo-boost.net/images/tiers/silver_1.png" width="200" height="200" /> &nbsp;&nbsp;&nbsp; <img src="http://elo-boost.net/images/tiers/bronze_1.png" width="200" height="200" /> </p>
                </div>
            <div id="tab3">
              MESAJ KUTUSU GELECEK
                </div>
            <div id="tab4">
             SON 10 MAÇ İÇERİĞİ
                </div>
            <div id="tab5">
             DUO İstekleri
                </div>
                          
                    </div>
        
    </div>
@stop