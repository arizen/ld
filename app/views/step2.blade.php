@extends('layouts.default')
@section('content')

{{ HTML::ul($errors->all()) }}



<center>
{{ Form::open(array('action' => 'UserController@checkStep2', 'id'=>'signup')) }}

<table align="center" width="70%" border="1">
  <tr>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/1.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/2.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/3.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/4.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/5.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/6.jpg"></td>
  </tr>
  <tr>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/7.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/8.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/9.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/10.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/11.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/12.jpg"></td>
  </tr>
  <tr>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/13.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/14.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/15.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/16.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/17.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/18.jpg"></td>
  </tr>
  <tr>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/19.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/20.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/21.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/22.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/23.jpg"></td>
    <td style="padding-right: 5px;"><img src="http://leagueduo.com/static/avatar/24.jpg"></td>
  </tr>
</table>

      {{ Form::submit('İleri', array('class' => 'btn btn-primary btn-lg')) }}
{{ Form::close() }}

</center>
@stop