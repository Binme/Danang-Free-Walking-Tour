@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
            @if ($errors->any())
                    <ul class="error-form">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif    
            @if((Auth::user()->role == 2) || (Auth::user()->role == 1))
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Create Recom
                  <a class="btn btn-primary" role="button" style="float: right;" onclick="myService(document.getElementById('id03').style.display='block')">Show</a>
                  <a class="btn btn-warning" role="button" style="float: right;margin-right: 10px" onclick="myService(document.getElementById('id03').style.display='none')">Hide</a>
                </div>
              </div>
              </div>
            </div>
    
            <div class="form-group col-md-12 hello" id="id03">
            <form method="post" enctype="multipart/form-data" action="{{route('create-news')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">  
              <label class="col-md-3 col-form-label" for="text-input">Image:</label>
            <input type="file" id="text-input" name="img" class="form-control"><br>
              <label class="col-md-3 col-form-label" for="text-input">Title:</label>
            <input type="text" id="text-input" name="title" class="form-control" required=""><br>
              <label class="col-md-3 col-form-label" for="text-input">Author:</label>
            <input type="text" id="text-input" name="author" class="form-control" required=""><br>
          <label>Content</label>
          <textarea name="body" class="form-control " id="editor1" required=""></textarea>
            <div class="card-header">            
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
          </form>  
          </div>
          @else
          @endif
            <div class="card">
                    <table class="table table-responsive-sm table-hover table-outline mb-0">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">
                            <i class="icon-people"></i>
                          </th>
                          <th>News</th>
                          <th>Content</th>
                          <th>Time</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($posts as $post)
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/posts/images/{{$post->img}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">{{$post->title}}</div>
                            <div class="small text-muted">

                              <span>Author</span> | {{$post->author}}
                            </div>
                          </td>
                          <td>
                            <i class="flag-icon flag-icon-br h6 mb-0" title="br" id="br"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>DN</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">17/6/2017</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td> 
                          <td>
                            @switch(Auth::user()->role)
                                  @case(0)
                                      
                                      @break

                                  @case(1)
                                      <a class="btn btn-primary" href="{{url('/admin/news/edit/' .$post->id)}}" role="button">Detail</a>
                                      <a class="btn btn-danger" href="{{url('/admin/news/delete/' .$post->id)}}" role="button">Delete</a>  
                                      @break

                                  @case(2)
                                      <a class="btn btn-primary" href="{{url('/admin/news/edit/' .$post->id)}}" role="button">Detail</a>
                                      <a class="btn btn-danger" href="{{url('/admin/news/delete/' .$post->id)}}" role="button">Delete</a>
                                      @break    

                                  @default
                                      Default
                              @endswitch 
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  {{ $posts->links() }}
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