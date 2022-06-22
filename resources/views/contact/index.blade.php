@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body pb-1">
            <h4 class="mb-0">Message Inbox</h4>
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
                            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
                                Date-Time
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Browser: activate to sort column ascending">Name</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Email</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Subject</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Message</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                id="status" aria-label="Engine version: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contact as $item)
                            @if ($item->status == 1)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ mb_strimwidth($item->message, 0, 50, '...') }}</td>
                                    <td>Read</td>
                                    <td>
                                        <a href="{{ url('delete_contact/' . $item->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="{{ url('view_contact/' . $item->id) }}" id="status"
                                            class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @else
                                <tr class="font-weight-bold">
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->subject }}</td>
                                    <td>{{ mb_strimwidth($item->message, 0, 50, '...') }}</td>
                                    <td>Unread</td>
                                    <td>
                                        <a href="{{ url('delete_contact/' . $item->id) }}" class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="{{ url('view_contact/' . $item->id) }}" id="status"
                                            class="btn btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {

            $("#status").click(function() {
                alert('read');
            });

        });
    </script>
@endsection
