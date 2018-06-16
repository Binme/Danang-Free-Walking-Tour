@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
              

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