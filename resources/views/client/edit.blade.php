@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Product</h1>
        </div>
        <div class="card-body">
            <form action="{{route('update_client',$client->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                    <div class="col-md-12 mb-3">
                        <label for="">Client_name</label>
                        <input type="text" value="{{$client->client_name}}" class="form-control" name="client_name">
                        @error('client_name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" value="{{$client->designation}}" name="designation">
                        @error('designation')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Company</label>
                        <input type="text" class="form-control" name="company" value="{{$client->company}}">
                        @error('company')
                            <div class="text-danger mt-1">{{ $message }}</div>
                         @enderror
                    </div>
                    @if($client->image)
                        <img src="{{asset('assets/uploads/client/'.$client->image)}}" class= "cate-image"  alt="client image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Rating</label>
                        <select name="rating"class="form-control" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="1 Star "{{ $client->rating == '1 Star' ? 'selected' : '' }}>1 Star</option>
                            <option value="2 Star"{{ $client->rating == '2 Star' ? 'selected' : '' }}>2 Star</option>
                            <option value="3 Star" {{ $client->rating == '3 Star' ? 'selected' : '' }}>3 Star</option>
                            <option value="4 Star" {{ $client->rating == '4 Star' ? 'selected' : '' }}>4 Star</option>
                            <option value="5 Star" {{ $client->rating == '5 Star' ? 'selected' : '' }}>5 Star</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Review_text</label>
                        <textarea rows="3" class="form-control" name="review">{{$client->review}}</textarea>
                        @error('review')
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
