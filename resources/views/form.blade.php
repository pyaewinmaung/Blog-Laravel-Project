@extends('layout.master')
@section('content')
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">

<div class="card">
<div class="card-header">
<strong>Horizontal</strong> Form
</div>
<div class="card-body card-block">
<form action method="post" class="form-horizontal">
<div class="row form-group">
<div class="col col-md-3">
<label for="hf-email" class=" form-control-label">Email</label>
</div>
<div class="col-12 col-md-9">
<input type="email" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control">
<span class="help-block">Please enter your email</span>
</div>
</div>
<div class="row form-group">
<div class="col col-md-3">
<label for="hf-password" class=" form-control-label">Password</label>
</div>
<div class="col-12 col-md-9">
<input type="password" id="hf-password" name="hf-password" placeholder="Enter Password..." class="form-control">
<span class="help-block">Please enter your password</span>
</div>
</div>
</form>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary btn-sm">
<i class="fa fa-dot-circle-o"></i> Submit
</button>
<button type="reset" class="btn btn-danger btn-sm">
<i class="fa fa-ban"></i> Reset
</button>
</div>
</div>
<div class="card">
<div class="card-header">
<strong>Normal</strong> Form
</div>
<div class="card-body card-block">
<form action method="post" class>
<div class="form-group">
<label for="nf-email" class=" form-control-label">Email</label>
<input type="email" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control">
<span class="help-block">Please enter your email</span>
</div>
<div class="form-group">
<label for="nf-password" class=" form-control-label">Password</label>
<input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control">
<span class="help-block">Please enter your password</span>
</div>
</form>
</div>
<div class="card-footer">
<button type="submit" class="btn btn-primary btn-sm">
<i class="fa fa-dot-circle-o"></i> Submit
</button>
<button type="reset" class="btn btn-danger btn-sm">
<i class="fa fa-ban"></i> Reset
</button>
</div>
</div>

</div>
</div>
</div>
@endsection