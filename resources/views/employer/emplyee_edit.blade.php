@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Member</h1>
        </div>
        <div class="card-body">
            <form action="{{route('update_member',$employee->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-8">
                    <div class="col-md-12 mb-3">
                        <label for="">Member_name</label>
                        <input type="text" value="{{$employee->name}}" class="form-control" name="name">
                        @error('name')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Designation</label>
                        <input type="text" class="form-control" value="{{$employee->designation}}" name="designation">
                        @error('designation')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Position</label>
                        <input type="text" class="form-control" value="{{$employee->position}}" name="position">
                        @error('position')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <label for="">Department</label>
                        <select name="department"class="form-control" aria-label="Default select example">
                            <option selected>Department</option>
                            <option value="Management "{{ $employee->department == 'Management' ? 'selected' : '' }}>Management</option>
                            <option value="HR"{{ $employee->department == 'HR' ? 'selected' : '' }}>HR</option>
                            <option value="Software Team" {{ $employee->department == 'Software Team' ? 'selected' : '' }}>Software Team</option>
                            <option value="Business" {{ $employee->department == 'Business' ? 'selected' : '' }}>Business</option>
                            <option value="UI/UX" {{ $employee->department == 'UI/UX' ? 'selected' : '' }}>UI/UX</option>
                            <option value="SQA" {{ $employee->department == 'SQA' ? 'selected' : '' }}>SQA</option>
                            <option value="Mob Application" {{ $employee->department == 'Mob Application' ? 'selected' : '' }}>Mob Application</option>
                        </select>
                    </div>
                    @if($employee->image)
                        <img src="{{asset('assets/uploads/member/'.$employee->image)}}" class= "cate-image"  alt="member image">
                    @endif
                    <div class="col-md-12 mb-3">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image">
                        @error('image')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="">Facebook</label>
                        <input type="text" class="form-control" value="{{$employee->facebook}}" name="facebook">
                        @error('facebook')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Twitter</label>
                        <input type="text" class="form-control" value="{{$employee->twitter}}" name="twitter">
                        @error('twitter')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Instagram</label>
                        <input type="text" class="form-control" value="{{$employee->instagram}}" name="instagram">
                        @error('instagram')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Linkedin</label>
                        <input type="text" class="form-control" value="{{$employee->linkedin}}" name="linkedin">
                        @error('linkedin')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark px-4">Update Employee</button>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>

@endsection
