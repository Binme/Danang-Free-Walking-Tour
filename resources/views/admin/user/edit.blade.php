@extends('admin.layouts.admin')
@section('content')
    <div class="container-fluid">
          <div class="animated fadeIn">         
          <div class="row" style="margin-top: 5%">
                <div class="col-md-12">  
                  <div class="card">
                  <div class="card-header">
                    <strong>Edit user</strong>
                    Detail
                    
                  </div>
                  <div class="card-body">
                    <form action="{{route('update-user')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
                      <input type="hidden" name="_token" value="{{csrf_token()}}">
                      <input type="hidden" name="id" value="{{$user->id}}">
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="file-input">Change avatar: <img src="{{ asset('assets/images/Avatar/' .$user->img) }}" class="img-avatar" width="50" height="40"></label>
                        <div class="col-md-9">
                          <input type="file" id="text-input" name="img" class="form-control">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="disabled-input">Email:</label>
                        <div class="col-md-9">
                          <input type="text" id="disabled-input" name="disabled-input" class="form-control" placeholder="{{$user->email}}" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Username:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="name" class="form-control" value="{{$user->name}}">
                          <span class="help-block">Please enter your name</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Gender:</label>
                        <div class="col-md-9">
                          <select id="select1" name="gender" class="form-control">
                            <option value="{{$user->gender}}">Default</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Phone:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="phone" class="form-control" value="{{$user->phone}}">
                          <span class="help-block">Please enter your phone</span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="text-input">Address:</label>
                        <div class="col-md-9">
                          <input type="text" id="text-input" name="address" class="form-control" value="{{$user->address}}">
                          <span class="help-block">Please enter your address</span>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">New Password</span>
                          </div>
                          <input type="password" id="password3" name="password" class="form-control" value="{{$user->password}}">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="fa fa-asterisk"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    @if(Auth::user()->role == 2)  
                      <div class="form-group row">
                        <label class="col-md-3 col-form-label" for="select1">Position</label>
                        <div class="col-md-9">
                          <select id="select1" name="role" class="form-control">
                            <option value="{{$user->role}}">Default</option>
                            <option value="0">Customer</option>
                            <option value="1">Staff</option>
                            <option value="2">Admin</option>
                          </select>
                        </div>
                      </div>
                    @endif  
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
@endsection                