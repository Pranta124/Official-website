@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add Client</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert-client')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Client_name</label>
                        <input type="text" class="form-control"  name="client_name">
                            @error('client_name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" name="designation">
                            @error('designation')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Company</label>
                        <input type="text" class="form-control" name="company">
                        @error('company')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Rating</label>
                        <select name="rating"class="form-select" aria-label="Default select example">
                            <option selected>Rating</option>
                            <option value="1 Star">1 Star</option>
                            <option value="2 Star">2 Star</option>
                            <option value="3 Star">3 Star</option>
                            <option value="4 Star">4 Star</option>
                            <option value="5 Star">5 Star</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Review_text</label>
                        <textarea rows="3" class="form-control" name="review"></textarea>
                        @error('review')
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
