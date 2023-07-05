@extends('admin.layouts.master')
@section('contents')
<div class="container">

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Review</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Review</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="row">
        <div class="col-12">


    @if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
            <div class="card">
            <div class="card-header">
                <h3 class="card-title"> Orders Table</h3>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table id="myTable" class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>Id</th>
                    <th>review_user_id</th>
                    <th>review_message</th>
                    <th>review_rating</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
        @foreach($data as $d)
        <tr>
        <td>{{$d->id}}</td>
        <td>{{$d->review_user_id}}</td>
        <td>{{$d->review_message}}</td>
        <td>{{$d->review_rating}}</td>
        {{-- <td><img src="{{asset('uploads/products/'.$d->image)}}" width="50px" height="50px"></td> --}}
        <td><a href="" class="btn btn-success">View</a>
        </tr>
        </tr>
        @endforeach
    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        </div>
        </div>
@endsection
