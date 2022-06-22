@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body pb-1">
            <h3 class="mb-0">Edit Product</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('update_prod', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label for="">Title</label>
                        <input type="text" value="{{ $product->title }}" class="form-control" name="title">
                        @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea rows="3" class="form-control" name="description">{{ $product->description }}</textarea>
                        @error('description')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    @if ($product->image)
                        <img src="{{ asset('assets/uploads/product/' . $product->image) }}" class="cate-image-lg"
                            alt="product image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control-file" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Status</label>
                        <select name="status" class="form-control" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="ongoing" {{ $product->status == 'ongoing' ? 'selected' : '' }}>Ongoing Product
                            </option>
                            <option value="completed" {{ $product->status == 'completed' ? 'selected' : '' }}>
                                Completed Product</option>
                            <option value="upcoming" {{ $product->status == 'upcoming' ? 'selected' : '' }}>Upcoming
                                Product
                            </option>

                        </select>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label for="">Link</label>
                        <input type="text" value="{{ $product->link }}" class="form-control" name="link">
                        @error('link')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark px-5">Update Product</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
