@extends('layouts.default')
@section('content')

@if (Session::has('id') ){{

            Session::forget('id');

        }}
        @endif

         <div align="center" class="alert alert-success">
    <strong style="font-size:30px;">Başarıyla Çıkış Yaptınız!</strong></div>
    <meta http-equiv="refresh" content="3;URL=http://leagueduo.com">


@stop