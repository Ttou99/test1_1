@extends('layouts.backend.master')

@section('css')
@endsection

@section('title')
    Subject Add
@stop

@section('content')



        <div class="page-wrapper">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Academic Years <span class="login-danger">*</span></label>
                                            <select  name="academicyear_id" class="form-control select" onclick="console.log($(this).val())"
                                                     onchange="console.log('change is firing')">
                                                <option value="" selected disabled>Select Academic Year</option>
                                                @foreach ($academicyears as $academicyear)
                                                    <option value="{{ $academicyear->id }}"> {{ $academicyear->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Branches <span class="login-danger">*</span></label>
                                                <select id="branch_id" name="branch_id" class="form-control select">
                                                </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Semestre <span class="login-danger">*</span></label>
                                            <select name="Semestre" class="form-control select">
                                                <option value="" selected disabled>Select Semestre</option>
                                                <option value="S1">Semestre 01</option>
                                                <option value="S2">Semestre 02</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <div class="form-group local-forms">
                                            <label>Name Subject <span class="login-danger">*</span></label>
                                            <input type="text" name="name_subject" class="form-control" placeholder="Enter Name Of Subject">
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


@section('js')
    <script>
        $(document).ready(function () {
            $('select[name="academicyear_id"]').on('change', function () {
                var academicyear_id = $(this).val();
                if (academicyear_id) {
                    $.ajax({
                        url: "{{ URL::to('academicyear') }}/" + academicyear_id,
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            $('select[name="branch_id"]').empty();
                            $.each(data, function (key, value) {
                                $('select[name="branch_id"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection

