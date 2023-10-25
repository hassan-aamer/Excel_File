@extends('layouts.master')
@section('title', 'All Users')

@section('css')
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">All Users</h4>
                <br><br>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @if (session()->has('Add'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session()->get('Add') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">

                        <a href="{{ route('userExcel.create') }}" class="btn btn-success x-small">Add
                            User</a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('users_export') }}" class="btn btn-info x-small">Excel
                            Export</a>&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-warning x-small" data-toggle="modal"
                            data-target="#exampleModal">Excel Import</button>
                        <br><br>

                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                data-page-length="10" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->Name }}</td>
                                            <td>{{ $user->Email }}</td>
                                            <td>{{ $user->Phone }}</td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm" role="button"
                                                    aria-pressed="true"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                <a href="" type="button" class="btn btn-danger btn-sm"><i
                                                        class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->

    <!-- Excel Import -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <!-- add_form -->
                    <form action="{{ route('users_import') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col">
                                <label for="File" class="mr-sm-2">Excel Import:</label>
                                <input id="File" type="file" name="file" class="form-control" required>
                            </div>
                            <br><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')

@endsection
