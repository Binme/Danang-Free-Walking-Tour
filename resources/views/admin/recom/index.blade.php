@extends('admin.layouts.admin')
@section('content')
        <div class="container-fluid">
          <div class="animated fadeIn">
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    Search Engine
                  </div>
                  <div class="card-body">
                    <form action="" method="post" class="form-horizontal">
                      <div class="form-group row">
                        <div class="col-md-6">
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Name</span>
                          </div>
                          <input type="text" id="username3" name="username3" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-user"></i>
                            </span>
                          </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Address</span>
                          </div>
                          <input type="text" id="username3" name="username3" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-envelope"></i>
                            </span>
                          </div>
                        </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-md-6">
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Filter</span>
                          </div>
                          <input type="text" id="username3" name="username3" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fas fa-location-arrow"></i>
                            </span>
                          </div>
                        </div>
                        </div>
                        <div class="col-md-6">
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Founder</span>
                          </div>
                          <input type="text" id="username3" name="username3" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fas fa-phone"></i>
                            </span>
                          </div>
                        </div>
                        </div>
                      </div>
              
                    </form>
                  </div>
                  <div class="card-footer">
                    <button type="button" class="btn btn-sm btn-info">Search</button>
                  </div>
                </div>
              </div>
            </div>              
            @if((Auth::user()->role == 2) || (Auth::user()->role == 1))
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Create Recom
                  <a class="btn btn-primary" role="button" style="float: right;" onclick="myService(document.getElementById('id02').style.display='block')">Create</a>
                </div>
              </div>
              </div>
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
                          <th>Recoms</th>
                          <th>Address</th>
                          <th>Rating</th>
                          <th class="text-center">Filter</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($recoms as $recom)
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/ThingsToDo/{{$recom->img}}" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">{{$recom->title}}</div>
                            <div class="small text-muted">

                              <span>Fouder</span> | 
                            </div>
                          </td>
                          <td>
                            <i class="flag-icon flag-icon-br h6 mb-0" title="br" id="br">{{$recom->address}}</i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>Good</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">{{$recom->rating}}</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                               @switch($recom->filter)
                                  @case('eat')
                                      <i class="fas fa-utensils"></i>
                                      @break

                                  @case('drink')
                                      <i class="fas fa-glass-martini"></i>
                                      @break

                                  @case('relax')
                                      <i class="fas fa-allergies"></i>
                                      @break
                                  
                                  @case('buy')
                                      <i class="fas fa-shopping-cart"></i>
                                      @break         

                                  @case('entertainment')
                                      <i class="fab fa-accessible-icon"></i>
                                      @break 

                                  @case('stay')
                                      <i class="fas fa-home"></i>
                                      @break 

                                  @default
                                      Default
                              @endswitch 
                          </td>
                          <td>
                            @switch(Auth::user()->role)
                                  @case(0)
                                      
                                      @break

                                  @case(1)
                                      <a class="btn btn-primary" onclick="myService(document.getElementById('id01').style.display='block')" role="button">Detail</a>  
                                      @break

                                  @case(2)
                                      <a class="btn btn-primary" onclick="myService(document.getElementById('id01').style.display='block')" role="button">Detail</a>
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
                  {{ $recoms->links() }}
                </div>
              </div>
              <!--/.col-->
              <div class="container-fluid modal" id="id01">
          <div class="animated fadeIn">
              <div class="row" style="margin-top: 5%">
                <div class="col-md-2"></div>
                <div class="col-md-8">  
                  <div class="card">
                  <div class="card-header">
                    <strong>Edit user</strong>
                    Detail
                    <span onclick="document.getElementById('id01').style.display='none';" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Picture Recom: (1)</label>
                        <div class="col-md-9">
                          <input type="file" id="file-input" name="file-input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Title:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your title</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Address:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your name address</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Rating:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your rating</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Picture Recom_detail: (5)</label>
                        <div class="col-md-9">
                          <input type="file" id="file-multiple-input" name="file-multiple-input" multiple>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Category</label>
                        <div class="col-md-9">
                          <select id="select1" name="role" class="form-control">
                            <option value="0">Customer</option>
                            <option value="1">Staff</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="textarea-input">About:</label>
                        <div class="col-md-9">
                          <textarea id="textarea-input" name="textarea-input" rows="9" class="form-control" placeholder="Content.."></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Map:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" placeholder="asd">
                          <span class="help-block">Please enter your location</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabled-input">Author:</label>
                        <div class="col-md-9">
                          <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="giabao2013dn@gmail.com" disabled>
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
          </div>
            </div>
            <!--/.row-->
          </div>
        </div>
@endsection