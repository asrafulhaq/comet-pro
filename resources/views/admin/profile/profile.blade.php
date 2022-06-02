@extends('admin.layouts.app')

@section('dashboard-content')

<!-- Page Wrapper -->
<div class="page-wrapper">			
    <div class="content container-fluid">
        
        @include('admin.layouts.page-header')


        <div class="row">
            <div class="col-md-12">
                <div class="profile-header">
                    <div class="row align-items-center">
                        <div class="col-auto profile-image">
                            <a href="#">
                                <img style="width:100px; height:100px;object-fit:cover;" class="rounded-circle" alt="User Image" src="{{ url('storage/admins/' . Auth::guard('admin') -> user() -> photo ) }}">
                            </a>
                        </div>
                        <div class="col ml-md-n2 profile-user-info">
                            <h4 class="user-name mb-0">{{ Auth::guard('admin') -> user() -> name }}</h4>
                            <h6 class="text-muted">{{ Auth::guard('admin') -> user() -> email }}</h6>
                            <div class="user-Location"><i class="fa fa-user"></i> {{ Auth::guard('admin') -> user() -> username }}</div>
                            
                        </div>
                        <div class="col-auto profile-btn">
                            
                            <a href="#" class="btn btn-primary">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profile-menu">
                    <ul class="nav nav-tabs nav-tabs-solid">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#photo_tab">Profile Photo</a>
                        </li>
                    </ul>
                </div>	
                <br>
                <br>
                @include('validate.validate')
                <div class="tab-content profile-tab-cont">
                    
                    <!-- Personal Details Tab -->
                    <div class="tab-pane fade active show" id="per_details_tab">
                    
                        <!-- Personal Details -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title d-flex justify-content-between">
                                            <span>Personal Details</span> 
                                            <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a>
                                        </h5>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                            <p class="col-sm-10">{{ Auth::guard('admin') -> user() -> name }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
                                            <p class="col-sm-10">{{ Auth::guard('admin') -> user() -> email }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Cell</p>
                                            <p class="col-sm-10">{{ Auth::guard('admin') -> user() -> cell }}</p>
                                        </div>
                                        <div class="row">
                                            <p class="col-sm-2 text-muted text-sm-right mb-0 mb-sm-3">Role</p>
                                            <p class="col-sm-10">{{ Auth::guard('admin') -> user() -> humayon -> name }}</p>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <!-- Edit Details Modal -->
                                <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Personal Details</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="row form-row">
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>First Name</label>
                                                                <input type="text" class="form-control" value="John">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Last Name</label>
                                                                <input type="text" class="form-control" value="Doe">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label>Date of Birth</label>
                                                                <div class="cal-icon">
                                                                    <input type="text" class="form-control" value="24-07-1983">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Email ID</label>
                                                                <input type="email" class="form-control" value="johndoe@example.com">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Mobile</label>
                                                                <input type="text" value="+1 202-555-0125" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <h5 class="form-title"><span>Address</span></h5>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                            <label>Address</label>
                                                                <input type="text" class="form-control" value="4663 Agriculture Lane">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>City</label>
                                                                <input type="text" class="form-control" value="Miami">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>State</label>
                                                                <input type="text" class="form-control" value="Florida">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Zip Code</label>
                                                                <input type="text" class="form-control" value="22434">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Country</label>
                                                                <input type="text" class="form-control" value="United States">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary btn-block">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Edit Details Modal -->
                                
                            </div>

                        
                        </div>
                        <!-- /Personal Details -->

                    </div>
                    <!-- /Personal Details Tab -->
                    
                    <!-- Change Password Tab -->
                    <div id="password_tab" class="tab-pane fade">
                    
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Change Password</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="{{ route('admin.password.change', Auth::guard('admin') -> user() -> id) }}" method="POST">
                                            @csrf
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input name="old_password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input name="password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password</label>
                                                <input name="password_confirmation" type="password" class="form-control">
                                            </div>
                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Change Password Tab -->

                    <!-- Change Password Tab -->
                    <div id="photo_tab" class="tab-pane fade">
                    
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Upload your profile Photo</h5>
                                <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                        <form action="{{ route('admin.profile.photo.upload', Auth::guard('admin') -> user() -> id ) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <input name="profile_photo" style="display: none" type="file" class="" id="profile_photo"> 
                                                <label for="profile_photo">
                                                    <img style="width:150px;cursor:pointer;" src="https://t4.ftcdn.net/jpg/02/83/72/41/360_F_283724163_kIWm6DfeFN0zhm8Pc0xelROcxxbAiEFI.jpg" alt="">
                                                </label>
                                            </div>


                                            <button class="btn btn-primary" type="submit">Save Changes</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Change Password Tab -->
                    
                </div>
            </div>
        </div>
       
        
    </div>             
    
</div>
<!-- /Page Wrapper -->



@endsection 