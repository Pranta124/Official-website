@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Brand</h1>
        </div>
        <div class="card-body">
            <form action="{{route('update_brand',$brand->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                    <div class="col-md-12 mb-3">
                        <label for="">Brand_name</label>
                        <input type="text" value="{{$brand->brand_name}}" class="form-control" name="brand_name">
                        @error('brand_name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Brand_link</label>
                        <input type="text" class="form-control" value="{{$brand->link}}" name="brand_link">
                        @error('link')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    @if($brand->image)
                        <img src="{{asset('assets/uploads/brand/'.$brand->image)}}" class= "cate-image"  alt="brand_image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

@endsection
