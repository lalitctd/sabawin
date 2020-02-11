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
                    <div class="table-responsive">
                      <form class="forms-sample" action="{{url('admin/create-user-insert')}}" method="post">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">Name</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{ old('name') }}">
                          @error('name')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputEmail3">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="{{ old('email') }}">
                           @error('email')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPassword4">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password" value="{{ old('password') }}">
                          @error('password')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputPhone">Phone Number</label>
                          <input type="text" class="form-control" id="exampleInputPhone" placeholder="Phone Number" name="phone_number" value="{{ old('phone_number') }}">
                          @error('phone_number')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                         <div class="form-group">
                          <label for="exampleInputDesignation">Designation</label>
                          <input type="text" class="form-control" id="exampleInputDesignation" placeholder="Designation" name="designation" value="{{ old('designation') }}">
                          @error('designation')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>

                        <div class="form-group">
                          <label for="exampleInputRole">Role</label>
                          <select class="form-control" id="exampleInputRole" name="role">
                            <option value="">Select User Role</option>
                            @foreach($data as $key=>$value)
                              <option value="{{$value->id}}" <?php echo ($value->id==old('role'))?'selected':''?>>{{$value->role_name}}</option>
                            @endforeach
                            </select>
                            @error('role')
                              <div class="text-danger">{{ $message }}</div>
                          @enderror
                        </div>
                        <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
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
                    <h4 class="card-title">List of Users</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <th>SNo</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone Number</th>
                          <th>Designation</th>
                          <th>Role</th>
                        </thead>
                        <tbody>
                          @foreach($userList as $key => $user)
                          <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->designation}}</td>
                            <td>{{$user->role_name}}</td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         

@endsection