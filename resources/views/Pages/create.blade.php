@extends('layouts.master')
@section('title', 'Add Users')

@section('css')
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Add Users</h4>
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

                    @if (session()->has('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ session()->get('error') }}</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="col-xs-12">
                        <div class="col-md-12">

                            <a href="{{ route('userExcel.index') }}" class="btn btn-success x-small" role="button"
                                aria-pressed="true">All Users</a><br><br>

                            <br>
                            <form action="{{ route('userExcel.store') }}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="Name">Name</label>
                                        <input type="text" name="Name" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="Email">Email</label>
                                        <input type="email" name="Email" class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="Phone">Phone</label>
                                        <input type="text" name="Phone" class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success x-small pull-right"
                                    type="submit">Submit</button>
                            </form>
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
