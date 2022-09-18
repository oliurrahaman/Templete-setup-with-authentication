@extends('admin.layout.master')
@section('title')
    Unit
@endsection
@section('admin_content')
<div class="row">
    <h1>Unit</h1>
    <div class="col-12">
        <div class="d-flex justify-content-end">
            <a href="{{ url('admin/unit/create') }}" class="btn btn-primary">
                <i class="fas fa-plus-circle"></i>
                Add New Unit
            </a>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive my-2">
            <table class="table table-bordered table-striped" id="dataTable">
                <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center"> Name</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($unit as $item)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $item->name }}</td>
                                    @if ($item->status == 1)
                                        <td class="text-center">Active</td>
                                    @endif
                                    @if ($item->status == 0)
                                        <td class="text-center">Deactive</td>
                                    @endif


                                    <td class="text-center">
                                        <a href="{{ url('admin/unit/' . $item->id . '/edit') }}" class="btn btn-success btn-sm"
                                            title="Edit Unit" aria-hidden="true"><i class="fa fa-pen-to-square"></i></a>
                                        <form method="POST" action="{{ url('admin/unit/' . $item->id) }}"
                                            accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" id="{{ $item->id }}"
                                                class="btn btn-danger btn-sm delete-confirm" title="Delete unit"><i
                                                    class="fa-solid fa-trash"></i></button>
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
