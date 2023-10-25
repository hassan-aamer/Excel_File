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

                        <a href="{{ route('userExcel.create') }}" class="btn btn-success btn-sm">Add User</a>&nbsp;&nbsp;&nbsp;
                        <a href="{{ route('users_export') }}" class="btn btn-info btn-sm">Excel Export</a>
                        
                        <br><br>

                        <form action="" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-floating">
                                    <label for="file">Excel Import</label>
                                    <input type="file" name="file" class="form-control"><br>
                                    <button class="btn btn-warning btn-sm nextBtn btn-lg pull-left"type="submit">Submit</button>
                                </div>
                            </div>
                        </form>

                        <br><br>

                        <div class="table-responsive">
                            <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                data-page-length="50" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i =0; ?>
                                    @foreach ($users as $user)
                                    <?php $i++; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $user->Name }}</td>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->Email }}</td>
                                            <td>{{ $user->Phone }}</td>
                                            <td>
                                                <a href=""
                                                    class="btn btn-info btn-sm" role="button" aria-pressed="true"><i
                                                        class="fa fa-edit"></i></a>&nbsp;&nbsp;
                                                <a href="" type="button"
                                                    class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
