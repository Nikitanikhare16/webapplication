@extends('admin.layouts.master')
@section('contents')
  {{-- <h2>category</h2>
  <form action ="{{route('category.update',$categories->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{$categories->name}}">
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select name="status" select id="status" class="form-control" >
        <option value="1" @if ($categories->status==1) selected='selected' @endif>Confirmed</option>
        <option value="0"  @if ($categories->status==0) selected='selected' @endif>Pending</option>
      </select>
    </div>
    <div class="form-group">
        <label>Image:</label>
        <input type="file" class="form-control border-input" name="image">
    </div>
    <button type="submit" class="btn btn-dark">Update</button>
</div>
  </form>
@endsection --}}

<div class="container-fluid">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Category Form</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action ="{{route('category.update',$categories->id)}}" method="post" enctype="multipart/form-data">
            @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$categories->name}}">
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" select id="status" class="form-control">
            {{-- <option value="" class="option_color">Select Status</option> --}}
            <option value="confirmed">Confirmed</option>
            <option value="pending">Pending</option>
          </select>
        </div>

        <div class="form-group">
            <label for="exampleInputFile">Image:</label>
            <div class="input-group">
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="exampleInputFile" name="image"  >
                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
              </div>
              <div class="input-group-append">
                <span class="input-group-text">Upload</span>
              </div>
            </div>
          </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
        </div>
      </div>
  </div>
</div>
@endsection
