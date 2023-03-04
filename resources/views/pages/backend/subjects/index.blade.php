@extends('layouts.backend.master')

@section('title')
    Subjects List
@stop

@section('content')
    <div class="page-wrapper">
        <div class="content container-fluid">

            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Subjects</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Subjects</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="student-group-form">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by ID ...">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Name ...">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search by Phone ...">
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="search-student-btn">
                            <button type="btn" class="btn btn-primary">Search</button>
                        </div>
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
                                        <h3 class="page-title">Subjects</h3>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="{{route('subjects.index')}}" class="btn btn-outline-gray me-2 active"><i
                                                class="feather-list"></i></a>

                                        <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i>
                                            Download</a>
                                        <a href="{{route('teachers.create')}}" class="btn btn-primary"><i
                                                class="fas fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div id="sidebar-menu" class="sidebar-menu">
                                <ul>


                                    <li class="submenu">
                                        <a href="#"><i class=""></i> <span> 1ère année informatique</span>
                                            <span class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Semestre 1</a></li>
                                            <li><a href="#">Semestre 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class=""></i> <span> 2ème année informatique</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li><a href="#">Semestre 1</a></li>
                                            <li><a href="#">Semestre 2</a></li>
                                        </ul>
                                    </li>
                                    <li class="submenu">
                                        <a href="#"><i class=""></i> <span> 3ème année informatique</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li>
                                        <a href="#"><i class=""></i> <span> Ingénierie des Systèmes d'Information et du Logiciel (ISIL)</span>
                                            <span class="menu-arrow"></span></a>

                                            <ul>
                                            <li><a href="#">Semestre 1</a></li>
                                            <li><a href="#">Semestre 2</a></li>
                                            </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Systèmes Informatiques (SI)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>
                                        </ul>


                                    </li>

                                    <li class="submenu">
                                        <a href="#"><i class=""></i> <span> 1ère année Master</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class=""></i> <span> Informatique Décisionnelle et Optimisation (IDO)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Réseaux et Technologies de l'Information et de la Communication (RTIC)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Système d'Information et Génie Logiciel (SIGL)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Intelligence artificielle (IA)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>


                                        </ul>


                                    </li>

                                    <li class="submenu">
                                        <a href="#"><i class=""></i> <span> 2ème année Master</span> <span
                                                class="menu-arrow"></span></a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class=""></i> <span> Informatique Décisionnelle et Optimisation (IDO)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Réseaux et Technologies de l'Information et de la Communication (RTIC)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Système d'Information et Génie Logiciel (SIGL)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="#"><i class=""></i> <span> Intelligence artificielle (IA)</span>
                                                    <span class="menu-arrow"></span></a>

                                                <ul>
                                                    <li><a href="#">Semestre 1</a></li>
                                                    <li><a href="#">Semestre 2</a></li>
                                                </ul>
                                            </li>


                                        </ul>


                                    </li>



                                </ul>
                            </div>






                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


@endsection


