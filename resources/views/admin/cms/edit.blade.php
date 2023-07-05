@extends('admin.layouts.master')
@section('contents')
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <div class="col-md-12">
              <!-- general form elements -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">CMS Form</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action ="{{route('cms.update',$cms->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
              {{-- <form> --}}
                  <div class="card-body">
                    <div class="form-group">
                      <label for="name">Title:</label>
                      <input type="name" class="form-control" id="exampleInputEmnameail1" placeholder="Enter title" name="title" value="{{$cms->title}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Description:</label>
                      <textarea class="ckeditor form-control" id="editor" placeholder="Enter description" name="description" value="{{$cms->description}}"></textarea>
                    </div>

                    {{-- <div class="form-group">
                      <label for="image">Image:</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="images[]"multiple class="custom-file-input" onchange="previewImage()" id="image" value="images" accept="image/*" value="{{$cms->images}}">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          <span class="text-danger">
                            @error('images')
                            {{$message}}
                            @enderror
                          </span>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div> --}}
                    <div class="form-group">
                        <label for="image">Image:</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="images[]"multiple class="custom-file-input" onchange="previewImage()" id="image" value="images" accept="image/*">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            <span class="text-danger">
                              @error('images')
                              {{$message}}
                              @enderror
                            </span>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" select id="status" class="form-control" value="{{ $cms->status}}">
                            <option value="" class="option_color">Select Status</option>
                            <option value="confirmed">Confirmed</option>
                            <option value="pending">Pending</option>
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
