@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body pb-1">
            <div class="d-flex justify-content-between">
                <h3 class="mb-0">View Job Post</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="col-sm-12">
                <div class="mb-5">
                    <table>
                        <tbody class="job-details-table">
                            <tr>
                                <td>Job Id: </td>
                                <td>{{ $career->id }}</td>
                            </tr>
                            <tr>
                                <td>Job Posted: </td>
                                <td>{{ $career->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Job Title: </td>
                                <td>{{ $career->job_tittle }}</td>
                            </tr>
                            <tr>
                                <td>Job Vacancy: </td>
                                <td>{{ $career->vacancy }}</td>
                            </tr>
                            <tr>
                                <td>Experience: </td>
                                <td>{{ $career->experience }}</td>
                            </tr>
                            <tr>
                                <td>Deadline: </td>
                                <td>{{ $career->deadline }}</td>
                            </tr>
                            <tr>
                                <td>Job Type: </td>
                                <td>{{ $career->job_type }}</td>
                            </tr>
                            <tr>
                                <td>Application Received: </td>
                                <td>{{ count($career->application) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div>
                    <h6 class="mb-0 mt-4 font-weight-bold">Job Summary</h6>
                    <hr class="my-1">
                    {!! $career->job_summary !!}
                </div>
                <div>
                    <h6 class="mb-0 mt-4 font-weight-bold">Job Responsibilities</h6>
                    <hr class="my-1">
                    {!! $career->role_responsibilities !!}
                </div>
                <div>
                    <h6 class="mb-0 mt-4 font-weight-bold">Minimum Qualification</h6>
                    <hr class="my-1">
                    {!! $career->minimum_qualification !!}
                </div>
                <div>
                    <h6 class="mb-0 mt-4 font-weight-bold">Additional Qualification</h6>
                    <hr class="my-1">
                    {!! $career->additional_qualification !!}
                </div>
                <div>
                    <h6 class="mb-0 mt-4 font-weight-bold">Compensation Other Benefit</h6>
                    <hr class="my-1">
                    {!! $career->compensation_other_benefit !!}
                </div>


                {{-- ------------------ View Applicants ------------------- --}}
                <div class="mt-5">
                    <h3 class="text-center">Applicants</h3>
                    <hr>
                    @if (count($career->application) == 0)
                        <h4 class="mt-4 text-center">No Application has received yet</h4>
                    @else
                        <table id="example1" class="table table-bordered table-striped dataTable dtr-inline">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Experience</th>
                                    <th>Portfolio</th>
                                    <th>Linkedin</th>
                                    <th>Resume</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($career->application as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->experience }}</td>
                                        <td><a href="https://{{ $item->portfolio }}" target="_blank">View Portfolio</a>
                                        </td>
                                        <td><a href="https://{{ $item->linkedin }}" target="_blank">View LinkedIn</a>
                                        </td>
                                        <td><a href="{{ asset('assets/uploads/applied-job-resume') }}/{{ $item->resume }}"
                                                target="_blank">View Resume</a></td>

                                        <td>
                                            <button class="btn btn-success" onclick="sendEmail()">Email</button> |
                                            <button class="btn btn-warning" onclick="sendSMS()">SMS</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>




    <script>
        function sendEmail() {
            alert('Feature Coming Soon...');
        }

        function sendSMS() {
            alert('Feature Coming Soon...');
        }
    </script>
@endsection

