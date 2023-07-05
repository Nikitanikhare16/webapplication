@extends('admin.layouts.master')
@section('contents')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Brand Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
              <form action={{route('brand.update',$brands->id)}} method="post" enctype="multipart/form-data">
                @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="name" class="form-control" id="exampleInputEmnameail1" placeholder="Enter name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="Status">Users:</label>
                            <select type="text" class="form-control" placeholder="Enter user_id" name="user_id" value="{{old('user_id')}}">
                            @foreach($categories as $do)
                           <option value={{$do->id}}>{{$do->name}}</option>
                              @endforeach
                           </select>
                      </div>
                    <div class="form-group">
                        <label for="Status">Product:</label>
                            <select type="text" class="form-control" placeholder="Enter product_id" name="product_id" value="{{old('product_id')}}">
                            @foreach($products as $do)
                           <option value="{{$do->id}}">{{$do->title}}</option>
                              @endforeach
                           </select>
                      </div>

                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
                </form>
                <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
  <script type="text/javascript">
      $(document).ready(function() {
         $('.ckeditor').ckeditor();
      });
  </script>
              </div>
             </div>
@endsection
