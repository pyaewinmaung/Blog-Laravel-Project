@extends('layout.master')
@section('content')
<div class="section__content section__content--p30">
<div class="container-fluid">


<div class="row">
<div class="col-md-12">

<h3 class="title-5 m-b-35">data table</h3>
<div class="table-data__tool">
<div class="table-data__tool-left">
<div class="rs-select2--light rs-select2--md">
<select class="js-select2" name="property">
<option selected="selected">All Properties</option>
<option value>Option 1</option>
<option value>Option 2</option>
</select>
<div class="dropDownSelect2"></div>
</div>
<div class="rs-select2--light rs-select2--sm">
<select class="js-select2" name="time">
<option selected="selected">Today</option>
<option value>3 Days</option>
<option value>1 Week</option>
</select>
<div class="dropDownSelect2"></div>
</div>
<button class="au-btn-filter">
<i class="zmdi zmdi-filter-list"></i>filters</button>
</div>
<div class="table-data__tool-right">
<button class="au-btn au-btn-icon au-btn--green au-btn--small">
<i class="zmdi zmdi-plus"></i>add item</button>
<div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
<select class="js-select2" name="type">
<option selected="selected">Export</option>
<option value>Option 1</option>
<option value>Option 2</option>
</select>
<div class="dropDownSelect2"></div>
</div>
</div>
</div>
<div class="table-responsive table-responsive-data2">
<table class="table table-data2">
<thead>
<tr>
<th>
<label class="au-checkbox">
<input type="checkbox">
<span class="au-checkmark"></span>
</label>
</th>
<th>name</th>
<th>email</th>
<th>description</th>
<th>date</th>
<th>status</th>
<th>price</th>
<th></th>
</tr>
</thead>
<tbody>
<tr class="tr-shadow">
<td>
<label class="au-checkbox">
<input type="checkbox">
<span class="au-checkmark"></span>
</label>
</td>
<td>Lori Lynch</td>
<td>
<span class="block-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="305c5f4259705548515d405c551e535f5d">[email&#160;protected]</a></span>
</td>
<td class="desc">Samsung S8 Black</td>
<td>2018-09-27 02:12</td>
<td>
<span class="status--process">Processed</span>
</td>
<td>$679.00</td>
<td>
<div class="table-data-feature">
<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
<i class="zmdi zmdi-mail-send"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
<i class="zmdi zmdi-edit"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
<i class="zmdi zmdi-delete"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="More">
<i class="zmdi zmdi-more"></i>
</button>
</div>
</td>
</tr>
<tr class="spacer"></tr>
<tr class="tr-shadow">
<td>
<label class="au-checkbox">
<input type="checkbox">
<span class="au-checkmark"></span>
</label>
</td>
<td>Lori Lynch</td>
<td>
<span class="block-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="adc7c2c5c3edc8d5ccc0ddc1c883cec2c0">[email&#160;protected]</a></span>
</td>
<td class="desc">iPhone X 64Gb Grey</td>
<td>2018-09-29 05:57</td>
<td>
<span class="status--process">Processed</span>
</td>
<td>$999.00</td>
<td>
<div class="table-data-feature">
<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
<i class="zmdi zmdi-mail-send"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
<i class="zmdi zmdi-edit"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
<i class="zmdi zmdi-delete"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="More">
<i class="zmdi zmdi-more"></i>
</button>
</div>
</td>
</tr>
<tr class="spacer"></tr>
<tr class="tr-shadow">
<td>
<label class="au-checkbox">
<input type="checkbox">
<span class="au-checkmark"></span>
</label>
</td>
<td>Lori Lynch</td>
<td>
<span class="block-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="2a4653446a4f524b475a464f04494547">[email&#160;protected]</a></span>
</td>
<td class="desc">iPhone X 256Gb Black</td>
<td>2018-09-25 19:03</td>
<td>
<span class="status--denied">Denied</span>
</td>
<td>$1199.00</td>
<td>
<div class="table-data-feature">
<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
<i class="zmdi zmdi-mail-send"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
<i class="zmdi zmdi-edit"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
<i class="zmdi zmdi-delete"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="More">
<i class="zmdi zmdi-more"></i>
</button>
</div>
</td>
</tr>
<tr class="spacer"></tr>
<tr class="tr-shadow">
<td>
<label class="au-checkbox">
<input type="checkbox">
<span class="au-checkmark"></span>
</label>
</td>
<td>Lori Lynch</td>
<td>
<span class="block-email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d6b2b9b396b3aeb7bba6bab3f8b5b9bb">[email&#160;protected]</a></span>
</td>
<td class="desc">Camera C430W 4k</td>
<td>2018-09-24 19:10</td>
<td>
<span class="status--process">Processed</span>
</td>
<td>$699.00</td>
<td>
<div class="table-data-feature">
<button class="item" data-toggle="tooltip" data-placement="top" title="Send">
<i class="zmdi zmdi-mail-send"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
<i class="zmdi zmdi-edit"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
<i class="zmdi zmdi-delete"></i>
</button>
<button class="item" data-toggle="tooltip" data-placement="top" title="More">
<i class="zmdi zmdi-more"></i>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
<div class="row m-t-30">
<div class="col-md-12">

<div class="table-responsive m-b-40">
<table class="table table-borderless table-data3">
<thead>
<tr>
<th>date</th>
<th>type</th>
<th>description</th>
<th>status</th>
<th>price</th>
</tr>
</thead>
<tbody>
<tr>
<td>2018-09-29 05:57</td>
<td>Mobile</td>
<td>iPhone X 64Gb Grey</td>
<td class="process">Processed</td>
<td>$999.00</td>
</tr>
<tr>
<td>2018-09-28 01:22</td>
<td>Mobile</td>
<td>Samsung S8 Black</td>
<td class="process">Processed</td>
<td>$756.00</td>
</tr>
<tr>
<td>2018-09-27 02:12</td>
<td>Game</td>
<td>Game Console Controller</td>
<td class="denied">Denied</td>
<td>$22.00</td>
</tr>
<tr>
<td>2018-09-26 23:06</td>
<td>Mobile</td>
<td>iPhone X 256Gb Black</td>
<td class="denied">Denied</td>
<td>$1199.00</td>
</tr>
<tr>
<td>2018-09-25 19:03</td>
<td>Accessories</td>
<td>USB 3.0 Cable</td>
<td class="process">Processed</td>
<td>$10.00</td>
</tr>
<tr>
<td>2018-09-29 05:57</td>
<td>Accesories</td>
<td>Smartwatch 4.0 LTE Wifi</td>
<td class="denied">Denied</td>
<td>$199.00</td>
</tr>
<tr>
<td>2018-09-24 19:10</td>
<td>Camera</td>
<td>Camera C430W 4k</td>
<td class="process">Processed</td>
<td>$699.00</td>
</tr>
<tr>
<td>2018-09-22 00:43</td>
<td>Computer</td>
<td>Macbook Pro Retina 2017</td>
<td class="process">Processed</td>
<td>$10.00</td>
</tr>
</tbody>
</table>
</div>

</div>
</div>
</div>
</div>
@endsection