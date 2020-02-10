@extends('admin.template')

@section('content')

  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-face-profile"></i>
                </span> User Profile</h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            <div class="row">
              <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
                      <div class="img-profile">
                         <img src="{{ url('public/admin') }}/assets/images/faces/face2.jpg" class="img-thumbnail prof" alt="Cinque Terre" width="304" height="236">
                         <label for="file-input" class="title" title="Change Profile Picture">
                            <i class="mdi mdi-cloud-upload btn-icon-prepend" style="font-size: 60px !important;"></i></label>
                           <input id="file-input" type="file"/ accept="image/*" class="author_image" name="employee_img">
                          <div class="overlay"></div>
                      </div>
                      
                    </div>            
                  </div>
                </div>
              </div>
              <div class="col-md-7 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Profile Details</h4>

                    <table class="table">
                      <tr>
                        <th>Name</th>
                        <td>{{$data['name']}}</td>
                      </tr>
                      <tr>
                        <th>Email ID</th>
                        <td>{{$data['email']}}</td>
                      </tr>
                      <tr>
                        <th>Mobile Number</th>
                        <td>{{$data['phone_number']}}</td>
                      </tr>
                      <tr>
                        <th>Password</th>
                        <td>*********</td>
                      </tr>
                      <tr>
                        <th>Designation</th>
                        <td>{{$data['designation']}}</td>
                      </tr>
                    </table>
                    
                  </div>
                </div>
              </div>
            </div>            
          </div>
         

@endsection