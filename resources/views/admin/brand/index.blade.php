@extends('admin.layouts.master')
@section( 'contents')
<div class="container">
<div class="row">
    <div class="col-12">
        <a href="{{route('admin.brand.create')}}" class="btn btn-primary">Add Brand</a><br>
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
                <th>User_id</th>
                <th>Product_id</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>

                @foreach($brands as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->name}}</td>
                  <td>{{$d->user_id}}</td>
                  <td>{{$d->product_id}}</td>
                 <td><a href={{route('brand.edit',$d->id)}} class="btn btn-info">Edit</a>
                  <a href={{route('brand.delete',$d->id)}} class="btn btn-info">Delete</a></td>
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
