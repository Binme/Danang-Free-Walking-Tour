@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
            <h2>Edit Post</h2>
            @if ($errors->any())
                    <ul class="error-form">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif    
            @if((Auth::user()->role == 2) || (Auth::user()->role == 1))
    
            <div class="form-group col-md-12">
            <form method="post" enctype="multipart/form-data" action="{{route('edit-news')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">  
            <input type="hidden" name="id" value="{{$post->id}}">  
              <label class="col-md-3 col-form-label" for="text-input">Change image: <img src="../../../assets/images/posts/images/{{$post->img}}" class="img-avatar" width="50" height="40"></label>
            <input type="file" id="text-input" name="img" class="form-control">
            <br>
              <label class="col-md-3 col-form-label" for="text-input">Title:</label>
            <input type="text" id="text-input" name="title" class="form-control" value="{{$post->title}}" required><br>
              <label class="col-md-3 col-form-label" for="text-input">Author:</label>
            <input type="text" id="text-input" name="author" class="form-control" value="{{$post->author}}" required><br>
          <label>Content</label>
          <textarea name="body" class="form-control " id="editor1" required="">{{$post->body}}</textarea>
            <div class="card-header">            
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>  
          </div>
          @else
          @endif

                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>
        </div>
        <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'editor1', {
            filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        } );
    </script>
@endsection