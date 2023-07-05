@extends('admin.layouts.master')
@section( 'contents')
<div class="container">
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Category</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Category</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>


    <div class="container pt-3">
        @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message')}}
        </div>
        @endif
    </div>
    <div class="row">
    <div class="col-12">
        <a href="{{route('category.create')}}" class="btn btn-primary">Add Category</a><br>
<br>
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Category Table</h2>
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
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach($categories as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->name}}</td>
                  {{-- <td>{{$d->status}}</td> --}}
                  <td>@if($d->status==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
@endif
                  </td>
                  <td><img src="{{asset('uploads/'.$d->image)}}" width="50px" height="50px"  ></td>
                 <td><a href={{route('category.edit',$d->id)}} class="btn btn-info">Edit</a>
                  <a href={{route('category.delete',$d->id)}} class="btn btn-info">Delete</a></td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>
 --}}


@endsection
