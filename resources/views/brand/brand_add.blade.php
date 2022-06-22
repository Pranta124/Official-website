@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add New Bramd</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert_brand')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Brand_name</label>
                        <input type="text" class="form-control" name="brand_name">
                        @error('brand_name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Brand_link</label>
                        <input type="text" class="form-control" name="brand_link">
                        @error('link')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Brand Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
