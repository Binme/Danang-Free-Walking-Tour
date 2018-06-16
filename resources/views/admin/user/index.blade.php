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
                            <span class="input-group-text">Username</span>
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
                            <span class="input-group-text">Email</span>
                          </div>
                          <input type="email" id="username3" name="username3" class="form-control">
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
                            <span class="input-group-text">Address</span>
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
                            <span class="input-group-text">Phone</span>
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
            @if(Auth::user()->role == 2)
            <div class="row">
              <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  Create User
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
                          <th>User</th>
                          <th>Address</th>
                          <th>Phone</th>
                          <th class="text-center">Position</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../assets/images/Dog/26_1_.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-danger"></span>
                            </div>
                          </td>
                          <td>
                            <div>{{$user->name}}</div>
                            <div class="small text-muted">

                              <span>Recurring</span> | {{$user->email}}
                            </div>
                          </td>
                          <td>
                            <i class="flag-icon flag-icon-br h6 mb-0" title="br" id="br">{{$user->address}}</i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>+84</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">{{$user->phone}}</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                              @switch($user->role)
                                  @case(0)
                                      <i class="fas fa-user" style="font-size:18px"></i>
                                      @break

                                  @case(1)
                                      <i class="fas fa-users-cog" style="font-size:18px"></i>
                                      @break

                                  @case(2)
                                      <i class="fas fa-user-tie" style="font-size:18px"></i>
                                      @break    

                                  @default
                                      Default
                              @endswitch     
                          </td>
                          <td>
                            @switch(Auth::user()->role)
                                  @case(0)
                                    @if(Auth::user()->id == $user->id)
                                      <a class="btn btn-primary" onclick="myService(document.getElementById('id01').style.display='block')" role="button">Edit</a>
                                    @else
                                    @endif   
                                      @break

                                  @case(1)
                                    @if(Auth::user()->id == $user->id)
                                      <a class="btn btn-primary" role="button" onclick="myService(document.getElementById('id01').style.display='block')">Edit</a>
                                    @else
                                    @endif  
                                      @break

                                  @case(2)
                                      <a class="btn btn-primary" role="button" onclick="myService(document.getElementById('id01').style.display='block')">Detail</a>
                                      <a class="btn btn-danger" href="{{url('/admin/user/delete/' .$user->id)}}" role="button">Delete</a>
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
                        <label class="col-md-3 col-form-label" for="disabled-input">Email:</label>
                        <div class="col-md-9">
                          <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="giabao2013dn@gmail.com" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Username:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" value="Gia Bao">
                          <span class="help-block">Please enter your name</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Age:</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="radio" id="inline-radio1" value="option1" name="inline-radios">
                            <label class="form-check-label" for="inline-radio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="radio" id="inline-radio2" value="option2" name="inline-radios">
                            <label class="form-check-label" for="inline-radio2">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Phone:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" placeholder="asd">
                          <span class="help-block">Please enter your phone</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Address:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="text-input" class="form-control" placeholder="asd">
                          <span class="help-block">Please enter your address</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">New Password</span>
                          </div>
                          <input type="password" id="password3" name="password3" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-asterisk"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Change avatar</label>
                        <div class="col-md-9">
                          <input type="file" id="file-input" name="file-input">
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
          @if(Auth::user()->role == 2)
          <div class="container-fluid modal" id="id02">
          <div class="animated fadeIn">
              <div class="row" style="margin-top: 2%">
                <div class="col-md-2"></div>
                <div class="col-md-8">  
                  <div class="card">
                  <div class="card-header">
                    <strong>Create New</strong>
                    User
                    <span onclick="document.getElementById('id02').style.display='none';" class="close" title="Close Modal">&times;</span>
                  </div>
                  <div class="card-body">
                    <form action="{{route('create-user')}}" method="POST" class="form-horizontal">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Name:</label>
                        <div class="col-md-9">
                          <input type="text" name="name" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Email:</label>
                        <div class="col-md-9">
                          <input type="email" name="email" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                          </div>
                          <input type="password" id="password3" name="password" class="form-control">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-asterisk"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label">Age:</label>
                        <div class="col-md-9 col-form-label">
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="radio" id="inline-radio1" value="male" name="gender">
                            <label class="form-check-label" for="inline-radio1">Male</label>
                          </div>
                          <div class="form-check form-check-inline mr-1">
                            <input class="form-check-input" type="radio" id="inline-radio2" value="female" name="gender">
                            <label class="form-check-label" for="inline-radio2">Female</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Phone:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="phone" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Address:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="address" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Change avatar</label>
                        <div class="col-md-9">
                          <input type="file" id="file-input" name="file-input">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Position</label>
                        <div class="col-md-9">
                          <select id="select1" name="role" class="form-control">
                            <option value="0">Customer</option>
                            <option value="1">Staff</option>
                            <option value="2">Admin</option>
                          </select>
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
          @else
          @endif   
        </div>
            <!--/.row-->
          </div>
        </div>
@endsection