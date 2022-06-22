@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Team Member Page</h1>
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
                                aria-label="Browser: activate to sort column ascending">Member_name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Designation</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Position</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Department</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">image</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Facebook</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Twitter</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Instagram</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Linkedin</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employee as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->position }}</td>
                                <td>{{ $item->department }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/member/' . $item->image) }}" class="cate-image"
                                        alt="image here">
                                </td>
                                <td class="text-center">                                   
                                    <a class="h3 text-dark" href="http://{{ $item->facebook }}" target="_blank"><i class="fab fa-facebook-square"></i></a>
                                </td>
                                <td class="text-center">                                   
                                    <a class="h3 text-dark" href="http://{{ $item->twitter }}" target="_blank"><i class="fab fa-twitter-square"></i></a>
                                </td>
                                <td class="text-center">                                   
                                    <a class="h3 text-dark" href="http://{{ $item->instagram }}" target="_blank"><i class="fab fa-instagram-square"></i></a>
                                </td>
                                <td class="text-center">                                   
                                    <a class="h3 text-dark" href="http://{{ $item->linkedin }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                </td>                                
                                <td>
                                    <a href="{{ url('edit-member/' . $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete_member/' . $item->id) }}" class="btn btn-danger">
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
