@extends('admin.layouts.master')
@section('contents')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Product Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                 <form action ="{{route('products.update',$data->id)}}" method="post" enctype="multipart/form-data">
                     @csrf
                     {{-- <form> --}}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Title:</label>
                      <input type="name" class="form-control" id="exampleInputEmnameail1" placeholder="Enter title" name="title" value="{{$data->title}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Description:</label>
                      <textarea class="ckeditor form-control" id="editor" placeholder="Enter description" name="description" value="{{old('description')}}" value="{{$data->description}}"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="Status">Select Category:</label>
                          <select type="text" class="form-control" placeholder="Enter category" name="category" value="{{old('category')}}" value="{{$data->category}}">
                          @foreach($categories as $d)
                         <option value="{{$d->id}}" selected="selected">{{$d->name}}</option>
                            @endforeach
                         </select>
                    </div>
                    <div class="form-group">
                        <label for="Status">Select Brand:</label>
                            <select type="text" class="form-control" placeholder="Enter brand" name="brand" >
                            @foreach($brands as $d)
                           <option >{{$d->name}}</option>
                              @endforeach
                           </select>
                      </div>
                      <div class="form-group">
                        <label for="Status">Select Size:</label>
                            <select type="text" class="form-control" placeholder="Enter size" name="size" value="{{old('size')}}">
                           <option >1</option>
                           <option >2</option>
                           <option >3</option>
                           <option >4</option>
                           </select>
                      </div>
                      <div class="form-group">
                        <label for="Status"> Select Color:</label>
                            <select type="text" class="form-control" placeholder="Enter color" name="color" value="{{old('color')}}">
                                @foreach($colors as $d)
                                <option >{{$d->name}}</option>
                                   @endforeach
                           </select>
                      </div>
                      <div class="form-group">
                        <label for="name">Price:</label>
                        <input type="name" class="form-control" id="exampleInputEmnameail1" placeholder="Enter price" name="price">
                      </div>
                      <div class="form-group">
                        <label for="Status">Total Quantity:</label>
                            <select type="text" class="form-control" placeholder="Enter quantity" name="quantity" value="{{old('quantity')}}">
                           <option >1</option>
                           <option >2</option>
                           <option >3</option>
                           <option >4</option>
                           </select>
                      </div>
                    <div class="form-group">
                      <label for="image">Image:</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" onchange="previewImage()" id="exampleInputFile"  value="{{$data->image}}">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="Status">UserName:</label>
                            <select type="text" class="form-control" placeholder="Enter username" name="username" value="{{old('username')}}">
                                @foreach($users as $d)
                                <option >{{$d->name}}</option>
                                   @endforeach
                           </select>
                      </div>
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
