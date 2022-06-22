@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-body pb-1">
            <h3 class="mb-0">Post New Job</h3>
        </div>
        <div class="card-body">
            <form action="{{route('insert_career')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="">Job Title</label>
                        <input type="text" class="form-control" name="job_tittle" value="{{@old('job_tittle')}}">
                        @error('job_tittle')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="text">Vacancy</label>
                        <input type="text" class="form-control"  name="vacancy" value="{{@old('vacancy')}}">
                        @error('vacancy')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Experience</label>
                        <input type="text" class="form-control" name="experience" value="{{@old('experience')}}">
                        @error('experience')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Deadline</label>
                        <input type="date" class="form-control" name="deadline" value="{{@old('deadline')}}">
                        @error('deadline')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job Type</label>
                        <select name="job_type"class="form-select" aria-label="Default select example">
                            <option selected>Status</option>
                            <option value="Full-time" {{ old('job_type') == 'Full-time' ? "selected" : "" }}>Full-time</option>
                            <option value="Part-time" {{ old('job_type') == 'Part-time' ? "selected" : "" }}>Part-time</option>
                            <option value="Intern" {{ old('job_type') == 'Intern' ? "selected" : "" }}>Intern</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Job Summary</label>
                        <textarea rows="3" class="form-control" name="job_summary"  id="summernote">{{@old('job_summary')}}</textarea>
                        @error('job_summary')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Role & Responsibilities</label>
                        <textarea rows="3" class="form-control" name="role_responsibilities" id="summernot">{{@old('role_responsibilities')}}</textarea>
                        @error('role_responsibilities')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Minimum Qualification</label>
                        <textarea rows="3" class="form-control" name="minimum_qualification" id="Summernot">{{@old('minimum_qualification')}}</textarea>
                        @error('minimum_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Additional Qualification</label>
                        <textarea rows="3" class="form-control" name="additional_qualification" id="summerno">{{@old('additional_qualification')}}</textarea>
                        @error('additional_qualification')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Compensation & Other Benefit</label>
                        <textarea rows="3" class="form-control" name="compensation_other_benefit" id="summern">{{@old('compensation_other_benefit')}}</textarea>
                        @error('compensation_other_benefit')
                            <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-dark px-5">Post Job</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
