@extends('layouts.default')
@section('content')

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="/js/jquery.bxslider.min.js"></script>
<!-- bxSlider CSS file -->
<link href="/css/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript">
  $(document).ready(function(){
  $('.bxslider').bxSlider();
});

</script>

<center><img src="http://leagueduo.com/images/slider1.jpg" width="70%" height="550px" /></center>

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
                <h4>Neden ?</h4>
                <p>Takım çalışması altında oynanılan oyunlarda %64 daha fazla kazanma oranı sağlanıyor.</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process ">
        <div class="process-step">
            2
        </div>
        <div class="process-details">
            <i class="icon-comments-alt"></i>
            <div class="process_text">
                <h4>Takım Ruhu</h4>
                <p>4 tane hiç tanımadığınız, ruh halini dahi bilmediğiniz insanlarla oynarsınız. Bu durum %20 oranında iletişim bozukluğuna sebep olur. İşte burada LeagueDuo.Com devreye giriyor.</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process ">
        <div class="process-step">
            3
        </div>
        <div class="process-details">
            <i class="icon-gift"></i>
            <div class="process_text">
                <h4>Ödüller</h4>
                <p>Leagueduo'dan bulduğunuz takım arkadaşınızla kazandığınız her oyun 5 LD kazanırsınız eğer kaybederseniz 3 LD hanenizden silinir. Her haftasonu 1.1780 2.840 3.400 rp kazanırsınız.</p>
            </div>
        </div>
    </div>
    
        
    <div class="single-process  last">
        <div class="process-step">
            4
        </div>
        <div class="process-details">
            <i class="icon-circle-arrow-up"></i>
            <div class="process_text">
                <h4>Yüksel</h4>
                <p>Leagueduo'dan takım arkadaşının geçmişine bakarak sağlam bir ikili olabilirsiniz ve birlikte oynayarak hem puan toplayıp RP kazanabilirsiniz hemde Ligleri hızla atlayabilirsiniz.</p>
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
<div class="col-md-3">
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
                          <td> <center><a href='http://leagueduo.com/profile/{{ $user->username }}'>{{ $user->username }}</center></td>
                          <td><center> {{ $user->ld_points }}</center></td>
                        </tr>
                        @endforeach
                      </tbody>
                </table>          

                    <div class="clear"></div>   
</div></div>
<!-- Sağ İçerik -->
  <div class="col-md-6">
  <div class="profilei">
<h3 class="profilei-title">Lig Seçin</h3>
<div class="alert alert-info">
    <strong>Hoşgeldiniz!</strong> aşağıdan lig seçerek DUOnuzu aramaya başlayabilirsiniz.</div>

<a href="/league/Challenger"><img src="/static/league/Challenger.png" height="250" width="250"></a>
  <a href="/league/Diamond"><img src="/static/league/Diamond.png" "250" width="250"></a>
  <a href="/league/Platinum"><img src="/static/league/Platinum.png" "250" width="250"></a>


 <a href="/league/Gold"><img src="/static/league/Gold.png" "250" width="250"></a>
<a href="/league/Silver"><img src="/static/league/Silver.png" "250" width="250"></a>
<a href="/league/Bronze"><img src="/static/league/Bronze.png" "250" width="250"></a>
<div class="clear"></div>   
</div>



                    </div>

<div class="col-md-3">
 <div class="profilei">
<h3 class="profilei-title">Reklam Alanı</h3>

sadsadasdadadasdasdadasdasdasd

                    <div class="clear"></div>   
</div></div>





</div>



            </div>
        </div>


@stop


