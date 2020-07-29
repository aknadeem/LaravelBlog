@extends('layouts.app')

@section('content')

	<div class="card">
        <div class="card-header">Create New Post 
            <span style="float:right;"> 
                <button class="btn btn-primary"><a class="text-right text-white" href="{{ route('posts') }}"> Posts </a> </button>  
            </span>
        </div>

       @include('admin.includes.errors')

        <div class="card-body">
        	<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
        		{{ csrf_field() }}

        		<div class="from-group">
        			<label for="Title"> Title </label>
        			<input type="text" name="title" placeholder="title" class="form-control">
        		</div>
        		<div class="from-group">
        			<label for="thumbnail"> Image </label>
        			<input type="file" name="thumbnail"  class="form-control">
        		</div>
                <div class="form-group">
                    <label for="category"> Select Category </label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }} </option>
                        @endforeach
                    </select>
                </div>
        		<div class="from-group">
        			<label for="content"> Content </label>
        			<textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
        		</div>
        		<div class="form-control">
        			<div class="text-center">
        				<button class="btn btn-success" type="submit"> Save </button>
        			</div>
        		</div>
        		
        	</form>
        </div>
    </div>

@endsection