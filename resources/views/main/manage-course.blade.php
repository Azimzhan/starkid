@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Управление курсами</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">в системе Starkid</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('container')
<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-social.png" 
                            class="img-fluid" alt="">
                        </div>
                        <div class="col-md-9">
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h4 class="border-bottom pb-2">Проекты на Ардуино</h4>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <h5><span class="badge badge-pill badge-primary"><i data-feather="at-sign" class="svg-icon"></i> Azimzhan Dauletov</span></h5> 
                                </div>
                            </div>
                            <div class="row d-flex">
                                <div class="col-md-1 text-center justify-content-center align-self-center">
                                    <i data-feather="dollar-sign" class="svg-icon text-primary"></i>
                                </div>
                                <div class="col-md-3 pt-3 justify-content-center align-self-center">
                                    <p class="font-14">Стоимость</p>
                                    <p class="font-14">5000 тенге</p>
                                    {{-- <p class="font-14">Автор: Азимжан Даулетов</p>
                                    <p class="font-14">Учеников: 12</p> --}}
                                </div>

                                <div class="col-md-1 text-center justify-content-center align-self-center">
                                    <i data-feather="users" class="svg-icon text-primary"></i>
                                </div>
                                <div class="col-md-3 pt-3 justify-content-center align-self-center">
                                    <p class="font-14">33 ученика</p>
                                </div>
                                <div class="col-md-1 text-center justify-content-center align-self-center">
                                    <i data-feather="user-check" class="svg-icon text-primary"></i>
                                </div>
                                <div class="col-md-3 pt-3 justify-content-center align-self-center">
                                    <p class="font-14">Прошли курс</p>
                                    <p class="font-14">15 учеников</p>
                                </div>
                            </div>

                            
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary"><i data-feather="user-plus" class="svg-icon"></i> Добавить ученика</button>
                                    <button class="btn btn-outline-danger ml-3"> <i data-feather="user-x" class="svg-icon"></i> Удалить ученика</button>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection