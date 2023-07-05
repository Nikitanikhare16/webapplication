@extends('admin.layouts.master')
@section( 'contents')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">CMS</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">CMS</li>
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
    </div><div class="row">
    <div class="col-12">
        <a href="{{route('admin.cms.create')}}" class="btn btn-primary">Add CMS</a><br>
<br>
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">CMS Table</h2>
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
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach( $cms as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->title}}</td>
                  <td>{!! $d->description !!}</td>
                  <td>
                    <?php

                    $img_url = explode("|",$d->images);



                    ?>

                    @foreach($img_url as $img)

                    <img src="{{asset('uploads/car/'.$img)}}" width="50px" height="50px"  >
@endforeach
</td>
                  {{-- <td>{{$d->status}}</td> --}}
                  <td>@if($d->status==1)
                    <span class="badge badge-success">Active</span>
                    @else
                    <span class="badge badge-danger">Inactive</span>
@endif
                  </td>
                  <td><a href={{route('cms.edit',$d->id)}} class="btn btn-info">Edit</a>
              <a href={{route('cms.delete',$d->id)}} class="btn btn-info">Delete</a>
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

@endsection
