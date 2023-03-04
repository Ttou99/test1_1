@extends('layouts.backend.master')

@section('title')
    Teacher Edit
@stop

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Edit Teacher</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}">Teachers</a></li>
                            <li class="breadcrumb-item active">Edit Teacher</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('teachers.update','test') }}"  autocomplete="off">
                                @csrf
                                {{ method_field('PATCH') }}
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Basic Details</span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Name <span class="login-danger">*</span></label>
                                            <input type="hidden" value="{{ $teachers->id }}" name="id">
                                            <input type="text" name="name" value="{{ $teachers->name  }}" class="form-control" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Genders <span class="login-danger">*</span></label>
                                            <select  name="gender_id" class="form-control select">
                                                <option value="" selected disabled>Select Gender</option>
                                                @foreach ($genders as $gender)
                                                    <option value="{{ $gender->id }}" {{ $teachers->gender_id == $gender->id ? 'selected' : '' }}>{{ $gender->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Mobile <span class="login-danger">*</span></label>
                                            <input type="text" name="phone" value="{{ $teachers->phone  }}" class="form-control" placeholder="Enter Phone">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms calendar-icon">
                                            <label>Joining Date <span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" value="{{ $teachers->joining_date  }}" type="date" name="joining_date" >
                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Email <span class="login-danger">*</span></label>
                                            <input type="email" value="{{ $teachers->email  }}" name="email" class="form-control" placeholder="Enter Email">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label> Password <span class="login-danger">*</span></label>
                                            <input type="password" value="{{ $teachers->password  }}" name="password" class="form-control" placeholder="Entre Password">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Address <span class="login-danger">*</span></label>
                                            <input type="text" value="{{ $teachers->address  }}" name="address" class="form-control" placeholder="Enter address">
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


