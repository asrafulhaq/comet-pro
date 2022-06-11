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
                        <h4 class="card-title">Add new Post</h4> 
                    </div>
                    <div class="card-body">
                        @include('validate.validate') 
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf 
                            <div class="form-group">
                                <label>Title</label>
                                <input name="name" type="text" value="{{ old('name') }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                                <textarea id="post_editor"></textarea>
                            </div>

     
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
 





            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Category</h3>
                    </div>
                    <div class="card-body">
                        <ul style="list-style: none">
                            @forelse($cats as $cat)
                                <li><label><input value="{{ $cat -> id }}" type="checkbox"> {{ $cat -> name }}</label></li>
                            @empty
                                <li>No cats found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Tags</h3>
                    </div>
                    <div class="card-body">
                        <select name="" class="form-control" id="tags" multiple>
                            @forelse($tags as $tag)
                                <option value="{{ $tag -> id }}">{{ $tag -> name }}</option>
                            @empty
                                <option value="">No tags found</option>
                            @endforelse
                            
                        </select>
                    </div>
                </div>
            </div>
        </div>
        


        
    </div>             
    
</div>
<!-- /Page Wrapper -->



@endsection 