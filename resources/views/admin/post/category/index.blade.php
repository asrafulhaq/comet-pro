@extends('admin.layouts.app')

@section('dashboard-content')

<!-- Page Wrapper -->
<div class="page-wrapper">			
    <div class="content container-fluid">
        
        @include('admin.layouts.page-header')


        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All permissions</h4>
                    </div>
                    <div class="card-body">
                        @include('validate.success-main')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>Slug</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($all_data as $item)
                                    <tr>
                                        <td>{{ $loop -> index + 1 }}</td>
                                        <td>{{ $item -> name }}</td>
                                        <td>{{ $item -> slug }}</td>
                                        <td>{{ $item -> created_at -> diffForHumans()  }}</td>
                                        <td>
                                            {{-- <a class="btn btn-sm btn-info" href="#"><i class="fe fe-eye"></i></a> --}}
                                            <a class="btn btn-sm btn-warning" href="{{ route('admin.permission.edit', $item -> id) }}"><i class="fe fe-edit"></i></a>
                                            <a class="btn btn-sm btn-danger" href="{{ route('admin.permission.destroy', $item -> id ) }}"><i class="fe fe-trash"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No permission founds</td>
                                    </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                
                @if( $form_type === 'add' )
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add new Permission</h4>
                    </div>
                    <div class="card-body">

                        @if($errors -> any())
                            <p class="alert alert-danger">{{ $errors -> first() }}<button class="close" data-dismiss="alert">&times;</button></p>
                        @endif
                        @if(Session::has('success'))
                            <p class="alert alert-success">{{ Session::get('success') }}<button class="close" data-dismiss="alert">&times;</button></p> 
                        @endif

                        <form action="{{ route('admin.permission.store') }}" method="POST"> 
                            @csrf
                            <div class="form-group">
                                <label>Permission Name</label>
                                <input name="name" type="text" class="form-control">
                            </div>
     
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
                @endif
                @if( $form_type === 'edit' )                
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Edit Permission</h4>
                        <a class="btn btn-primary btn-sm" href="{{ route('admin.permission') }}"> Add new permission </a>
                    </div>
                    <div class="card-body">

                        @include('validate.error')
                        @include('validate.success')

                        <form action="{{ route('admin.permission.update', $edit_data -> id ) }}" method="POST"> 
                            @csrf
                            <div class="form-group">
                                <label>Permission Name</label>
                                <input value="{{ $edit_data -> name }}" name="name" type="text" class="form-control">
                            </div>
     
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>


                    </div>
                </div>
                @endif
            </div>
        </div>
        


        
    </div>             
    
</div>
<!-- /Page Wrapper -->


@endsection 