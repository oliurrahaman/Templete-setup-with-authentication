@extends('admin.layout.master')
@section('title')
Category
@endsection
@section('admin_content')
<div class="row">
    <h1>Category Table</h1>
    <div class="col-12">
        <div class="d-flex justify-content-end">
            <a href="{{url('admin/category/create')}}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add New Category
            </a>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive my-2">
            <table class="table table-bordered table-striped" id="dataTable">
                <thead>
                                        <tr>
                                            <th class="text-center">SL</th>
                                            <th class="text-center">Category Name</th>
                                            <th class="text-center">Category Title</th>

                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cat as $item)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td class="text-center">{{ $item->catName }}</td>
                                                <td class="text-center">{{ $item->catTitle }}</td>


                                                <td class="text-center">

                                                    <a href="{{url('admin/category/'.$item->id.'/edit')}}" class="btn btn-success btn-sm" title="Edit Customer" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                                    <form method="POST" action="{{ url('admin/category/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" id="{{ $item->id }}" class="btn btn-danger btn-sm delete-confirm" title="Delete unit" ><i class="fa-solid fa-trash"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
