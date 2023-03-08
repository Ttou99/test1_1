@extends('layouts.backend.master')

@section('title')
    Room Add
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
                        <h3 class="page-title">Room Add</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('rooms.index')}}">Rooms</a></li>
                            <li class="breadcrumb-item active">Room Add</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('rooms.store') }}" class="form-accountant"  autocomplete="off">
                                @csrf

                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="form-title"><span>Room Information</span></h5>
                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Room Type <span class="login-danger">*</span></label>
                                            <select  name="roomtype_id" class="form-control select">
                                                <option value="" selected disabled>Select Room Type</option>
                                                @foreach ($roomtypes as $roomtype)
                                                    <option value="{{ $roomtype->id }}"> {{ $roomtype->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="col-12 col-sm-4">
                                        <div class="form-group local-forms">
                                            <label>Room No <span class="login-danger">*</span></label>
                                            <input type="text" name="roomno" class="form-control" value="">
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


