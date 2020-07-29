@extends('layouts.app')

@section('content')

	
	<div class="card">
        <div class="card-header">Create New Category 
            <span style="float:right;"> 
                <button class="btn btn-primary"><a class="text-right text-white" href="{{ route('categories') }}"> Categories</a> </button>  
            </span>
        </div>

        @include('admin.includes.errors')

        <div class="card-body">
        	<form action="{{ route('category.store') }}" method="post">
        		{{ csrf_field() }}

        		<div class="from-group">
        			<label for="name">Category Name </label>
        			<input type="text" name="name" placeholder="Category Name" class="form-control">
        		</div>
        		<div class="from-group" style="margin-top:10px;">
        			<div class="text-center">
        				<button class="btn btn-success btn-lg" type="submit"> Save </button>
        			</div>
        		</div>
        		
        	</form>
        </div> 
    </div>

@endsection