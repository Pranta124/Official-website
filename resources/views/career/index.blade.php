@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body pb-1">   
            <div class="d-flex justify-content-between">
                <h3 class="mb-0">Career</h3>
                <a href="{{url('add_career')}}" class="btn btn-dark px-4"><i class="fas fa-plus-circle mr-1"></i> Post New Job</a>
            </div>   
        </div>
        <div class="card-body">
            <div class="col-sm-12">
                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                    aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Id
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Job Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Vacancy</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Experience</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Deadline</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Job Type</th>                            
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Application Received</th>                            
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Job Posted</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($career as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->job_tittle }}</td>
                                <td>{{ $item->vacancy }}</td>
                                <td>{{ $item->experience }}</td>
                                <td>{{ $item->deadline }}</td>
                                <td>{{ $item->job_type }}</td>
                                <td>{{ count($item->application) }}</td>                               
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ url('view_job/' . $item->id) }}" class="btn btn-secondary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ url('edit_career/' . $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete_career/' . $item->id) }}" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
