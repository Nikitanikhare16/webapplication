@extends('admin.layouts.master')
@section('contents')

  <div class="container-fluid">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Category Form</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
           <form action={{route('store')}} method="post" enctype="multipart/form-data">
@csrf
    <div class="card-body">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
      </div>
      <div class="form-group">
        <label for="status">Status</label>
        <select name="status" select id="status" class="form-control">
            <option value="" class="option_color">Select Status</option>
            <option  value="1" id="active" for="active">Active</option>
            <option  value="0" id="inactive" for="inactive">Deactive</option>
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
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
        </div>
      </div>
  </div>
</div>
@endsection
