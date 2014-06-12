@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}

<div class="section-content section-tabs section-alter">
        <div class="tab-container">
    <div class="section-etabs-container">
        <ul class="section-etabs">
            <li class="tab active">
                <a href="#tabc1">Profil</a>
            </li>
            <li class="tab">
                <a href="#tabc2">Yorumlar</a>
            </li>
            <li class="tab">
                <a href="#tabc3">Üye Ayarları</a>
            </li>
        </ul>
    </div>
    <div class="container">

        <div class="tab-content">
            
            <div id="tabc1">
                <div class="row">
        DENEME
</div>            </div>
            <div id="tabc2">
               <div class="row"></div>
        DENEME
                         </div>
            <div id="tabc3">
                
                <div class="row">
        DENEME
                </div>
            </div>            
            
        </div>
    </div>
</div>    </div>

@stop