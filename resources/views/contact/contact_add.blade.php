@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Contact Add</h1>
        </div>
        <div class="card-body">
            <form action="{{route('insert_contact')}}" method="POST" enctype="multipart/form-data" id="add">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Name</label>
                        <input type="text" placeholder="Name" class="form-control" name="name">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Email</label>
                        <input type="email" placeholder="Email" class="form-control" name="email">
                        @error('email')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Subject</label>
                        <input type="text" placeholder="Subject" class="form-control" name="subject">
                        @error('subject')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Message</label>
                        <textarea rows="3" placeholder="Message" class="form-control" name="message"></textarea>
                        @error('message')
                         <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" value="unread" name="status">

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
@section('scripts')
    <script>
        $document.ready(function()
        {
            ("#add").parsley();
        })
    </script>
@endsection
