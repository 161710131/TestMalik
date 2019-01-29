@extends('layouts.app')
@section('content')
<section id="main-content">
          <section class="wrapper">         
<div class="container">
    <div class="row">
  <br>
      <div class="col-md-12">
        <ul class="breadcrumb">
          <li><a href="{{ url('/home') }}">Dashboard</a></li>
          <li class="active">user</li>
        </ul>
                <div class="pull-left">
                    <h2>Data user</h2>
                    <div class="hline"></div>
                </div>
                <br>
                <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.create') }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Data</span></a>
                </div>
                <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <table class="table table-striped task-table">
                    <thead>
                    <tr>
                      <th width="5%">No</font></th>
                      <th>Nama</th>
                      <th>Email</th>
                      <!-- <th>Password</th> -->
                      <th colspan="3">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach($user as $data)
                      <tr>
                        <td>
                            <div>{{$no++}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$data->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$data->email}}</div>
                            </td>
                             <!-- <td class="table-text">
                                <div>{{$data->password}}</div>
                            </td> -->
                        <td>
                            <a class="btn btn-warning" href="{{ route('user.edit', $data->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">Edit</span></a>
                        </td>
                        <td>
                            <form method="post" action="{{ route('user.destroy',$data->id) }}">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}">
                                <input type="hidden" name="_method" value="DELETE">

                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</span></button>
                            </form>
                        </td>
                      </tr>
                      @endforeach   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>  
        </div>
    </div>
</div>
@endsection