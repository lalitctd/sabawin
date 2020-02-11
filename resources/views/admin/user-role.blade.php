@extends('admin.template')

@section('content')

  <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white mr-2">
                  <i class="mdi mdi-face-profile"></i>
                </span> User Role</h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>

            @if ($message = Session::get('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong> {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            
            <div class="row">

              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">User Role</h4>
                    <div class="">
                      <form class="forms-sample" method="post" action="{{url('admin/create-role-insert')}}">
                        @csrf
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Role<sup class="text-danger">*</sup></label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputUsername2" placeholder="Role like Admin/Editior/Finance**" required="" name="role_name">
                          @error('role_name')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-gradient-primary mr-2 ">Submit</button>  
                      </div>
                      
                    </form>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">List of Roles</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <tr>
                          <th>SNo</th>
                          <th>Role Name</th>
                        </tr>
                         @foreach($data as $item => $value)
                         <tr>
                           <td>{{$item+1}}</td>
                           <td>{{$value['role_name']}}</td>
                         </tr>
                         @endforeach
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         

@endsection