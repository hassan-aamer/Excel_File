@extends('layouts.master')
@section('title', 'Edit Users')

@section('css')
@endsection

@section('page-header')
    <!-- breadcrumb -->
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h4 class="mb-0">Edit Users</h4>
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
                            <form action="{{ route('userExcel.update') }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="form-row">
                                    <div class="col">
                                        <label for="Name">Name</label>
                                        <input type="text" value="{{ $Users->Name }}" name="Name"
                                            class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="Email">Email</label>
                                        <input type="email" value="{{ $Users->Email }}" name="Email"
                                            class="form-control">
                                    </div>
                                    <div class="col">
                                        <label for="Phone">Phone</label>
                                        <input type="text" value="{{ $Users->Phone }}" name="Phone"
                                            class="form-control">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn-success x-smallpull-right"
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
