@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('category.store')}}" method="post">
                        @csrf
                    <div class="form-group">
                        <label>Select Parent Category</label>
                        <select name="parent_id" class="form-control">
                            <option value="">Select Parent Category</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Category Name</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                     <div class="form-group">
                        <label>Description</label>
                        <textarea name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
