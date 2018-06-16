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
                          <th>Services</th>
                          <th>Payment</th>
                          <th>Price</th>
                          <th class="text-center">Filter</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/DNFWT Basic Package 1.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">Basic Package</div>
                            <div class="small text-muted">

                              <span>Provider</span> | Nguyen Van Loi 
                            </div>
                          </td>
                          <td>
                            <i class="fab fa-paypal"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>$</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">18</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fas fa-coffee"></i>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/DNFWT Basic Package 2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">Medium Package</div>
                            <div class="small text-muted">

                              <span>Provider</span> | Nguyen Van Loi 
                            </div>
                          </td>
                          <td>
                            <i class="fab fa-paypal"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>$</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">37</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fas fa-coffee"></i>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/DNFWT Basic Package 3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">Premium Package</div>
                            <div class="small text-muted">

                              <span>Provider</span> | Nguyen Van Loi 
                            </div>
                          </td>
                          <td>
                            <i class="fab fa-paypal"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>$</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">60</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fas fa-coffee"></i>
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
                        <tr>
                          <td class="text-center">
                            <div class="avatar">
                              <img src="../../assets/images/DNFWT Basic Package 4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                              <span class="avatar-status badge-warning"></span>
                            </div>
                          </td>
                          <td>
                            <div style="overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;width: 150px;">Luxury Package</div>
                            <div class="small text-muted">

                              <span>Provider</span> | Nguyen Van Loi 
                            </div>
                          </td>
                          <td>
                            <i class="fab fa-paypal"></i>
                          </td>
                          <td>
                            <div class="clearfix">
                              <div class="float-left">
                                <strong>$</strong>
                              </div>
                              <div class="float-right">
                                <small class="text-muted">79</small>
                              </div>
                            </div>
                            <div class="progress progress-xs">
                              <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td class="text-center">
                            <i class="fas fa-coffee"></i>
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
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--/.col-->
            </div>
            <!--/.row-->
          </div>
        </div>
@endsection