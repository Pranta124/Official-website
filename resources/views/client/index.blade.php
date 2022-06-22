@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1>Client Page</h1>
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
                                aria-label="Browser: activate to sort column ascending">Client_name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Designation</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Company</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">image</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Rating</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Review</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($client as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->client_name }}</td>
                                <td>{{ $item->designation }}</td>
                                <td>{{ $item->company }}</td>
                                <td>
                                    <img src="{{ asset('assets/uploads/client/' . $item->image) }}" class="cate-image"
                                        alt="image here">
                                </td>
                                <td>{{ $item->rating }}</td>
                                <td>{{ $item->review }}</td>
                                <td>
                                    <a href="{{ url('edit-client/' . $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete_client/' . $item->id) }}" class="btn btn-danger">
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
