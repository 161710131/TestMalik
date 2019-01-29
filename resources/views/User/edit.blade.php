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
          <li class="active">Edit data</li>
        </ul>
		<BR>
			<div class="panel panel-default">
			  <div class="panel-heading"><h4>Edit Data user</h4>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('user.update' , $user->id) }}" method="post" >
			  		{{ csrf_field() }}
			  		<input name="_method" type="hidden" value="PATCH">
			  <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
			  			<label class="control-label">Name</label>	
			  			<input type="text" name="name" class="form-control" value="{{$user->name}}"  required>
			  			@if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
			  			<label class="control-label">Email</label>	
			  			<input type="email" name="email" class="form-control" value="{{$user->email}}"  required>
			  			@if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
			  			<label class="control-label">Password</label>	
			  			<input type="text" name="password" class="form-control" value="{{$user->password}}"  required>
			  			@if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Simpan Perubahan</span></button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection