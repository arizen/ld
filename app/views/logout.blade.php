@extends('layouts.default')
@section('content')

@if (Session::has('id') ){{

            Session::forget('id');

        }}
        @endif
@stop