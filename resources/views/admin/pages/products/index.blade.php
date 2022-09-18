@extends('admin.layout.master')

@section('title')
Product Index

@endsection

@section('admin_content')
<div class="row">
    <h1>Product List Table</h1>
    <div class="col-12">
        <div class="d-flex justify-content-end">
            <a href="{{ url('admin/product/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add New Product
            </a>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive my-2">
            <table class="dataTable table-responsive text-center multi-table table dt-table-hover" id="dataTable" style="white-space: nowrap;  text-overflow:ellipsis;">
                <thead>
                <tr>
                    <th class="text-center">SI</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Date</th>
                    <th class="text-center">Unit</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Is Sample Product?</th>
                    <th class="text-center">Details</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">Time</th>
                    <th class="text-center">Sale Range</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>

                </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $product->name }}</td>
                           <td class="text-center">{{ $product->category }}</td>
                            <td class="text-center"><img src="{{ asset($product->img ) }}" style="width: 50px; height:50px;" alt=""></td>
                            <td class="text-center">{{ $product->date }}</td>
                            <td class="text-center">{{ $product->unit }}</td>
                            <td class="text-center">{{ $product->price }}</td>
                            @if ($product->is_sample_product == 1)
                            <td class="text-center">Yes</td>
                        @endif
                        @if ($product->is_sample_product == 0)
                            <td class="text-center">No</td>
                        @endif
                            <td class="text-center">{{ $product->Details }}</td>
                            <td class="text-center">{{ $product->country }}</td>
                            <td class="text-center">{{ $product->time }}</td>
                            <td class="text-center">{{ $product->sale_range }}</td>
                            <td class="text-center">{{ $product->features }}</td>


                            <td>
                                <div class="container justify-content-center d-flex ">
                                    <a href="{{ url('admin/product/' . $product->id) }}" class="btn btn-info btn-sm me-1"
                                        title="View customer" aria-hidden="true"><i class="fa fa-eye"></i></a>
                                    <a href="{{ url('admin/product/' . $product->id . '/edit') }}"
                                        class="btn btn-success btn-sm me-1" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                    <form method="POST" action="{{ url('admin/product/' . $product->id) }}">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-info btn-sm btn-danger delete-confirm" aria-hidden="true"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>

                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


