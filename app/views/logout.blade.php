@extends('layouts.default')
@section('content')

@if (Session::has('id') ){{

            Session::forget('id');

        }}
        @endif

         <div align="center" class="alert alert-success">
    <strong style="font-size:30px;">Başarıyla Çıkış Yaptınız!</strong></div>

@stop