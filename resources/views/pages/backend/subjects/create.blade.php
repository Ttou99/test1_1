@extends('layouts.backend.master')

@section('title')
    Subject Add
@stop

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Add Subject</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('subjects.index') }}">Subjects</a></li>
                            <li class="breadcrumb-item active">Add Subject</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('subjects.store') }}" class="form-accountant"  autocomplete="off">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Basic Details</span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Academic Years <span class="login-danger">*</span></label>
                                            <select  name="academicyear_id" class="form-control select">
                                                <option value="" selected disabled>Select Academic Year</option>
                                                @foreach ($academicyears as $academicyear)
                                                    <option value="{{ $academicyear->id }}"> {{ $academicyear->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Branches <span class="login-danger">*</span></label>
                                            <select  name="branch_id" class="form-control select">
                                                <option value="" selected disabled>Select Branch</option>
                                                @foreach ($branches as $branch)
                                                    <option value="{{ $branch->id }}"> {{ $branch->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Semestre <span class="login-danger">*</span></label>
                                            <select class="form-control select">
                                                <option value="" selected disabled>Select Semestre</option>
                                                <option>Semestre 01</option>
                                                <option>Semestre 02</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name Subject <span class="login-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter Name Of Subject">
                                        </div>
                                    </div>





                                    <div class="col-12">
                                        <div class="student-submit">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection


