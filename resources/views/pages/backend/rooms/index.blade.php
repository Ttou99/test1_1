@extends('layouts.backend.master')

@section('title')
    Rooms
@stop

@section('content')

    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Rooms</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rooms</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body">

                            <div class="page-header">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h3 class="page-title">Rooms</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{route('rooms.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table border-0 star-student table-hover table-center mb-0 datatable table-striped">
                                    <thead class="student-thread">
                                    <tr>
                                        <th>ID</th>
                                        <th>Room Type</th>
                                        <th>Room No</th>
                                        <th class="text-end">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rooms as $room)
                                    <tr>
                                        <td>{{ $room->id }}</td>
                                        <td>{{ $room->roomtype->name }}</td>
                                        <td>{{ $room->roomno }}</td>
                                        <td class="text-end">
                                            <div class="actions ">
                                                <a href="javascript:;" class="btn btn-sm bg-success-light me-2 ">
                                                    <i class="feather-eye"></i>
                                                </a>
                                                <a href="{{ route('rooms.edit',$room->id) }}" class="btn btn-sm bg-danger-light">
                                                    <i class="feather-edit"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


@endsection


