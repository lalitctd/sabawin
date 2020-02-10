@extends('admin.template')

@section('content')

  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-face-profile"></i>
                </span>Create User </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                   
                    <div class="table-responsive">
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail3">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword4">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPhone">Phone Number</label>
                          <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone Number">
                        </div>

                         <div class="form-group">
                          <label for="exampleInputDesignation">Designation</label>
                          <input type="text" class="form-control" id="exampleInputDesignation" placeholder="Designation">
                        </div>

                        <div class="form-group">
                          <label for="exampleInputRole">Role</label>
                          <input type="text" class="form-control" id="exampleInputRole" placeholder="User Role">
                        </div>

                       

                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            
          </div>
         

@endsection