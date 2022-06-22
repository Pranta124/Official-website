@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body pb-1">
            <h3 class="mb-0">Add Product</h3>
        </div>
        <div class="card-body">
            <form action="{{route('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Title</label>
                        <input type="text" class="form-control" value="{{@old('title')}}" name="title">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea rows="3" class="form-control" name="description">{{@old('description')}}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control-file" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Status</label>
                        <select name="status"class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="ongoing" {{ old('status') == 'ongoing' ? "selected" : "" }}>Ongoing Product</option>
                            <option value="completed" {{ old('status') == 'completed' ? "selected" : "" }}>Completed Product</option>
                            <option value="upcoming" {{ old('status') == 'upcoming' ? "selected" : "" }}>Upcoming Product</option>
                     
                        </select>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="">Project Link</label>
                        <input type="text" class="form-control" name="link">
                        @error('link')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark px-5">Add Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
