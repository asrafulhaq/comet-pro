@extends('admin.layouts.app')

@section('dashboard-content')

<!-- Page Wrapper -->
<div class="page-wrapper">			
    <div class="content container-fluid">
        
        @include('admin.layouts.page-header')


        <div class="row">
            <div class="col-md-12">
                <a class="btn btn-primary" href="{{ route('post.create') }}">Add new post</a>
                <br>
                <br>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">All Posts</h4>
                    </div>
                    <div class="card-body">
                        @include('validate.success-main')
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Title</td>
                                    <td>Author</td>
                                    <td>Category</td>
                                    <td>Tag</td>
                                    <td>Created At</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>


                                @forelse( $all_data as $item ) 
                                <tr>
                                    <td>{{ $loop -> index + 1 }}</td>
                                    <td>{{ $item -> title }}</td>
                                    <td>{{ $item -> admin_id }}</td>
                                    <td>{{ $item -> cell }}</td>
                                    <td>{{ $item -> cell }}</td>
                                    <td>{{ $item -> humayon -> name }}</td>
                                    <td>{{ $item -> created_at -> diffForHumans() }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="7">No post found</td>
                                </tr>
                                @endforelse 

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        


        
    </div>             
    
</div>
<!-- /Page Wrapper -->



@endsection 