@extends('layouts.app')
@section('content')
<section id="main-content">
          <section class="wrapper">         
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">user</li>
          <li class="active">tambah data</li>
        </ul>
		<BR>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4>Tambah Data user</h4>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('user.store') }}" method="post" >
			  		{{ csrf_field() }}
			  <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Name</label>	
			  			<input type="text" name="name" class="form-control"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="email" name="email" class="form-control"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label class="control-label">Password</label>	
			  			<input type="password" name="password" class="form-control"  required>
			  			@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah</span></button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection