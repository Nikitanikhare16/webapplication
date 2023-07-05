@extends('admin.layouts.master')
@section( 'contents')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Contact</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Contact</li>
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
        {{-- <a href="{{route('category.create')}}" class="btn btn-dark">Add Category</a><br> --}}
<br>
      <div class="card">
        <div class="card-header">
          <h2 class="card-title">Contact Table</h2>
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
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>

              </tr>
            </thead>
            <tbody>

                @foreach($data as $d)
                <tr>
                  <td>{{$d->id}}</td>
                  <td>{{$d->fname}}</td>
                  <td>{{$d->lname}}</td>
                  <td>{{$d->email}}</td>
                  <td>{{$d->subject}}</td>
                  <td>{{$d->message}}</td>
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
