@extends('layouts.default')
@section('content')

<div class="row">
  <div class="col-md-9" style="margin-left:5%;"><table width="100%" border="1">
  <tr>
    <th scope="col"><table width="200px" border="1">
  <tr>
    <th scope="col"><div style="text-shadow: 1px 1px 1px #000; color:#D74536; font: normal 34px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-bottom: 6px; margin-left:1px; margin-top:6px;"><a href='http://leagueduo.com/profile/{{Session::get('user')->username}}'>{{Session::get('user')->username}}</a></div></th>
  </tr>
  <tr>
    <td>Online</td>
  </tr>
  <tr>
    <td><img src="http://avatar-user.s.aeriastatic.com/61386851/0327ddc4-84fe-4306-a367-80a8e947171e" style="height: 200px;border-radius: 10px;border: 1px solid rgb(0, 0, 0);box-shadow: 0 0 10px #000;"></td>
  </tr>
  <tr>
    <td><div style="color: black; font: normal 26px &quot;Trebuchet MS&quot;,Arial,sans-serif;font-weight: bold;margin-top: -10px; margin-left:1px; margin-bottom:15px;">{{Session::get('summoner')->league}} {{Session::get('summoner')->division}}</div></td>
  </tr>
  <tr>
    <td>Statlar</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table><table width="200px" border="1">
  <tr>
    <th scope="col">Kul ADı</th>
  </tr>
  <tr>
    <td>Online</td>
  </tr>
  <tr>
    <td>Profil Resmi</td>
  </tr>
  <tr>
    <td>ligi</td>
  </tr>
  <tr>
    <td>Statlar</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table><table width="200px%" border="1">
  <tr>
    <th scope="col">Kul ADı</th>
  </tr>
  <tr>
    <td>Online</td>
  </tr>
  <tr>
    <td>Profil Resmi</td>
  </tr>
  <tr>
    <td>ligi</td>
  </tr>
  <tr>
    <td>Statlar</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table></th>
  </tr>
</table></div>
  <div class="col-md-2">.col-mddasdasfsdfsdfsfd-4</div>
</div>


@stop


