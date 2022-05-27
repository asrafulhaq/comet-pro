@extends('admin.layouts.app')

@section('dashboard-content')

<!-- Page Wrapper -->
<div class="page-wrapper">			
    <div class="content container-fluid">
        
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Welcome Admin!</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Admin Users</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->


        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Users</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Email</td>
                                    <td>Cell</td>
                                    <td>Role</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse( $all_data as $item ) 
                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $item -> name }}</td>
                                    <td>{{ $item -> email }}</td>
                                    <td>{{ $item -> cell }}</td>
                                    <td>{{ $item -> humayon -> name }}</td>
                                    <td>{{ $item -> created_at -> diffForHumans() }}</td>
                                    <td>
                                        {{-- <a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a> --}}
                                        <a class="btn btn-sm btn-warning" href="#"><i class="fe fe-edit"></i></a>
                                        <a class="btn btn-sm btn-danger" href="#"><i class="fe fe-trash"></i></a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">No admin users found</td>
                                </tr>
                                @endforelse 

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-header">
                        <h4 class="card-title">Add new User</h4> 
                    </div>
                    <div class="card-body">
                        @include('validate.error')
                        @include('validate.success')
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label>Name</label>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" type="text" value="{{ old('email') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input name="username" type="text" value="{{ old('username') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Cell</label>
                                <input name="cell" type="text" value="{{ old('cell') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control" name="role" id="">
                                    <option value="">-select-</option>
                                    @forelse( $roles as $role )
                                    <option value="{{ $role -> id }}">{{ $role -> name }}</option>
                                    @empty
                                    <option value="">Roles empty</option>
                                    @endforelse
                                </select>
                            </div>
     
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        


        
    </div>             
    
</div>
<!-- /Page Wrapper -->


@endsection 