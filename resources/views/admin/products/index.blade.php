@extends('admin.layouts.master')
@section( 'contents')
<div class="container">
    <div class="container pt-3">
        @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message')}}
        </div>
        @endif
    </div>
<div class="row">
    <div class="col-12">
        <a href="{{route('products.create')}}" class="btn btn-primary">Add Product</a><br>
<br>
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Product Table</h2>
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
                <th>Category</th>
                <th>Image</th>
                <th>brand</th>
                <th>color</th>
                <th>size</th>
                <th>price</th>
                <th>quantity</th>
                <th>user</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach($data as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->title}}</td>
                  <td>{!! $d->description !!}</td>
                  <td>{{$d->category}}</td>
                  <td><img src="{{asset('uploads/'.$d->image)}}" width="50px" height="50px"  ></td>
                  <td>{{$d->brand}}</td>
                  <td>{{$d->color}}</td>
                  <td>{{$d->size}}</td>
                  <td>{{$d->price}}</td>
                  <td>{{$d->quantity}}</td>
                  <td>{{$d->username}}</td>
                  <td><a href={{route('products.edit',$d->id)}} class="btn btn-info">Edit</a>
                  <a href={{route('products.delete',$d->id)}} class="btn btn-info">Delete</a></td>
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
