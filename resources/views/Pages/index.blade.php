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
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="card-body">

                        <a href="{{ route('userExcel.create') }}" class="btn btn-success btn-sm">Add User</a><br><br>

                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                data-page-length="50" style="text-align: center">
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
                                                <a href="{{ route('userExcel.edit',$user->id) }}" class="btn btn-info btn-sm" role="button"
                                                    aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                <a href="{{ url('destroy',$user->id) }}" type="button" class="btn btn-danger btn-sm" 
                                                    ><i
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
@endsection
@section('js')

@endsection
