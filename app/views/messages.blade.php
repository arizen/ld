@extends('layouts.default')
@section('content')

<script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '748057568550130',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

{{ HTML::ul($errors->all()) }}
<div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">  
 <div class="row">
 @include('sidebar')
<!-- Sağ İçerik -->
  <div class="col-md-9">
  <div class="profilei">
<h3 class="profilei-title">Yorumlar</h3>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0/css/jquery.dataTables.css">
  
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.0/js/jquery.dataTables.js"></script>

<script>
$(document).ready( function () {
    var table = $('#users_table').DataTable();

} );
///

</script>

<table id="users_table" class="display">
    <thead>
        <tr>
            <th>Subject</th>
            <th>From id</th>
        </tr>
    </thead>
    <tbody>
          @foreach(Session::get('user')->messages as $message)
          <tr>
            <td>{{ $message->subject }}</td>
            <td>{{ $message->from_id }}</td>
          </tr>
          @endforeach
    </tbody>
</table>



<div class="clear"></div>		
</div>



										</div>
</div>



            </div>
        </div>


@stop


