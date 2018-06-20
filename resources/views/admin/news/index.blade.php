@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
              @if((Auth::user()->role == 2) || (Auth::user()->role == 1))
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Create Recom
                  <a class="btn btn-primary" role="button" style="float: right;" onclick="myService(document.getElementById('id03').style.display='block')">Create</a>
                </div>
              </div>
              </div>
            </div>
            @else
            @endif
          <div class="row hello" id="id03">
            <div class="col-md-12">
          <div class="animated fadeIn">
              <div class="row">
                <div class="col-md-12">  
                  <div class="card">
                  <div class="card-header">
                    <strong>Create news</strong>
                    
                    <span onclick="document.getElementById('id03').style.display='none';" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Title:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your title</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Author:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your name </span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Picture 1:</label>
                        <div class="col-md-9">
                          <input type="file" id="file-multiple-input" name="file-multiple-input" multiple>
                        </div>
                      </div>
                      <div class="form-group row hello" id="1and1">
                        <label class="col-md-3 col-form-label" for="text-input">Strong text 1:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your strong text</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">Line 1:</label>
                        <div class="col-md-9">
                          <textarea id="textarea-input" name="textarea-input" rows="2" class="form-control" placeholder="Content.."></textarea>
                        </div>
                      </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary">
                      <i class="fas fa-sign-in-alt"></i> Submit</button>
                  </div>
                  </form>
                </div>
                </div>
              </div>  
              </div>
            </div>
             
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <a class="btn btn-warning" role="button">Img_1</a>
                  <a class="btn btn-danger" role="button">Str_1</a>
                @for($i=1;$i<=20;$i++)  
                  <a class="btn btn-primary" role="button" onclick="myService(document.getElementById('1and{{i}}').style.display='block')">{{$i}}</a>
                @endfor
                </div>
                <div class="card-header">
                  <a class="btn btn-warning" role="button">Img_2</a>
                  <a class="btn btn-danger" role="button">Str_2</a>
                @for($i=1;$i<=20;$i++)  
                  <a class="btn btn-primary" role="button">{{$i}}</a>
                @endfor
                </div>
                <div class="card-header">
                  <a class="btn btn-warning" role="button">Img_3</a>
                  <a class="btn btn-danger" role="button">Str_3</a>
                @for($i=1;$i<=20;$i++)  
                  <a class="btn btn-primary" role="button">{{$i}}</a>
                @endfor
                </div>
                <div class="card-header">
                  <a class="btn btn-warning" role="button">Img_4</a>
                  <a class="btn btn-danger" role="button">Str_4</a>
                @for($i=1;$i<=20;$i++)  
                  <a class="btn btn-primary" role="button">{{$i}}</a>
                @endfor
                </div>
              </div>
              </div>
            </div>
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
                        @foreach($news as $new)
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/{{$new->img}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">{{$new->title}}</div>
                            <div class="small text-muted">

                              <span>Author</span> | {{$new->author}}
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
                                      <a class="btn btn-primary" href="" role="button">Detail</a>  
                                      @break

                                  @case(2)
                                      <a class="btn btn-primary" href="" role="button">Detail</a>
                                      <a class="btn btn-danger" href="" role="button">Delete</a>
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
                  {{ $news->links() }}
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>
        </div>
@endsection