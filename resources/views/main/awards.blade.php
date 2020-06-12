@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Мои успехи</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Ваши достижения</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('container')
<div class="row">
    <div class="col-md-12 border-bottom pb-2 mb-2">
        <h5>Курс "Проекты по Ардуино"</h5>
    </div>
    <div class="col-md-12 pb-2 mb-2 mt-3">
        <h5>Награды</h5>
    </div>
    
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-light justify-content-center">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <img src="{{asset('img/flag.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-md-12 mt-3 text-center">
                                <p><i data-feather="lock" class="svg-icon text-danger"></i> Первооткрыватель</p>
                                <p class="font-10">Пройдите первый урок курса</p>
                                {{-- <p class="font-10">За прохождение первого урока курса</p> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <img src="{{asset('img/medal.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-md-12 mt-3 text-center justify-content-center align-self-center">
                                <p><i data-feather="lock" class="svg-icon text-danger"></i>Внимательный</p>
                                <p class="font-10">Ответьте на контрольные вопросы с первого раза</p>
                                {{-- <p class="font-10">За прохождение первого урока курса</p> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 offset-md-4">
                                <img src="{{asset('img/trophy.svg')}}" class="img-fluid">
                            </div>
                            <div class="col-md-12 mt-3 text-center justify-content-center align-self-center">
                                <p><i data-feather="lock" class="svg-icon text-danger"></i>Лучший ученик</p>
                                <p class="font-10">Закончите курс с отличными оценками</p>
                                {{-- <p class="font-10">За прохождение первого урока курса</p> --}}
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection