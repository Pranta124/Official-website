@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Add Job</h1>
        </div>
        <div class="card-body">
            <form action="{{route('update_career',$career->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Job_Title</label>
                        <input type="text" value="{{$career->job_tittle}}"  class="form-control" name="job_tittle">
                        @error('job_tittle')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="text">Vacancy</label>
                        <input type="text" class="form-control" value="{{$career->vacancy}}"  name="vacancy">
                        @error('vacancy')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" value="{{$career->experience}}" name="experience" >
                        @error('experience')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Deadline</label>
                        <input type="date" class="form-control" value="{{$career->deadline}}" name="deadline">
                        @error('deadline')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job_type</label>
                        <select name="job_type"class="form-select"  aria-label="Default select example">
                            <option selected>Job_type</option>
                            <option value="Full-time"{{ $career->job_type == 'Full-time' ? 'selected' : '' }}>Full-time</option>
                            <option value="Part-time"{{ $career->job_type == 'Part-time' ? 'selected' : '' }}>Part-time</option>
                            <option value="Intern" {{ $career->job_type == 'Intern' ? 'selected' : '' }}>Intern</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job_Summary</label>
                        <textarea rows="3" class="form-control" name="job_summary"  id="summernote">{{$career->job_summary}}</textarea>
                        @error('job_summary')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Role & Responsibilities</label>
                        <textarea rows="3" class="form-control" name="role_responsibilities" id="summernot">{{$career->role_responsibilities}}</textarea>
                        @error('role_responsibilities')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Minimum Qualification</label>
                        <textarea rows="3" class="form-control" name="minimum_qualification" id="Summernot">{{$career->minimum_qualification}}</textarea>
                        @error('minimum_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Additional Qualification</label>
                        <textarea rows="3" class="form-control" name="additional_qualification" id="summerno">{{$career->additional_qualification}}</textarea>
                        @error('additional_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Compensation & Other_benefit</label>
                        <textarea rows="3" class="form-control" name="compensation_other_benefit" id="summern">{{$career->compensation_other_benefit}}</textarea>
                        @error('compensation_other_benefit')
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
