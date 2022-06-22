@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-body pb-1">
            <div class="d-flex justify-content-between">
                <h3 class="mb-0">Products</h3>
                <a href="{{url('add-product')}}" class="btn btn-dark px-4"><i class="fas fa-plus-circle mr-1"></i> Add New Product</a>
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
                                aria-label="Browser: activate to sort column ascending">Title</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Platform(s): activate to sort column ascending">Description</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Image</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Status</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Link</th>
                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                aria-label="Engine version: activate to sort column ascending">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ mb_strimwidth($item->description, 0, 80, '...') }}</td>                  

                                <td>
                                    <img src="{{ asset('assets/uploads/product/' . $item->image) }}"
                                        class="cate-image" alt="image here">
                                </td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->link }}</td>
                                <td>
                                    <a href="{{ url('edit-prod/' . $item->id) }}" class="btn btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="{{ url('delete_prod/' . $item->id) }}" class="btn btn-danger">
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
