@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h3 class="mb-0">Add Member</h3>
        </div>
        <div class="card-body">
            <form action="{{route('insert-member')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Member Name</label>
                        <input type="text" class="form-control" name="name" value="{{@old('name')}}">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" name="designation" value="{{@old('designation')}}">
                        @error('designation')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Position (For Displaying Position in Website)</label>
                        <input type="text" class="form-control" name="position" value="{{@old('position')}}">
                        @error('position')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Department</label>
                        <select name="department"class="form-select" aria-label="Default select example">
                            <option selected>Select Department......</option>
                            <option value="Management" {{ old('department') == 'Management' ? "selected" : "" }}>Management</option>
                            <option value="HR" {{ old('department') == 'HR' ? "selected" : "" }}>HR</option>
                            <option value="Software Team" {{ old('department') == 'Software Team' ? "selected" : "" }}>Software Team</option>
                            <option value="Business" {{ old('department') == 'Business' ? "selected" : "" }}>Business</option>
                            <option value="UI/UX" {{ old('department') == 'UI/UX' ? "selected" : "" }}>UI/UX</option>
                            <option value="SQA" {{ old('department') == 'SQA' ? "selected" : "" }}>SQA</option>
                            <option value="Mob Application" {{ old('department') == 'Mob Application' ? "selected" : "" }}>Mob Application</option>
                        </select>
                    </div>

                    
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control-file" name="image" id="formFile">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" value="https://www.facebook.com/Excelitai/" name="facebook">
                        @error('facebook')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" value="https://twitter.com/excel_it_ai" name="twitter">
                        @error('twitter')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" value="https://www.instagram.com/excelitai/" name="instagram">
                        @error('instagram')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Linkedin</label>
                        <input type="text" class="form-control" value="https://bd.linkedin.com/company/excelita" name="linkedin">
                        @error('linkedin')
                            <div class="text-danger mt-1">{{ $message }}</div>
                         @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark px-4">Add Employee</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
