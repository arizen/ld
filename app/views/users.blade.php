@extends('layout')
@section('content')

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
            <th>Username</th>
            <th>League</th>
            <th>Division</th>
        </tr>
    </thead>
    <tbody>
    	    @foreach($users as $user)
    	    <tr>
            <td> <a href='/lolduo/public/profile/{{$user->id}}'> {{ $user->username }} </a> </td>
            <td>{{ $user->league }}</td>
            <td>{{ $user->division }}</td>
        	</tr>
         	@endforeach
    </tbody>
</table>

@stop