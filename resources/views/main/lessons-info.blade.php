@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Уроки и материалы курса</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Проекты на Ардуино</a>
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
                        <div class="col-md-12 ">
                            <h5>Урок №1 - Подключаем Ардуино</h5>
                        </div>
                    </div>
                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="message-square" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Описание урока</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi suscipit voluptate accusantium quod, non quibusdam!</p>
                        </div>
                    </div>

                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="folder" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Материалы к уроку</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                                </div>
                            </div> 
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="message-square" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Тест к уроку</p>
                            {{-- <a href="#" class="text-success"><i data-feather="check" class="svg-icon"></i> Пройден на 100%</a> --}}
                            <a href="#" class="text-warning"><i data-feather="lock" class="svg-icon"></i> Недоступен</a>
                            {{-- <a href="#" class="text-danger"><i data-feather="alert-triangle" class="svg-icon"></i> Провален</a> --}}
                        </div>
                    </div>  
                    <div class="row border-top mt-3 pt-3">
                        <div class="col-md-4">
                            <a href="{{url('lesson')}}" class="btn btn-outline-primary">Начать урок</a>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <h5><i data-feather="lock" class="svg-icon text-danger"></i> Урок №2 - Подключаем Ардуино</h5>
                        </div>
                    </div>
                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="message-square" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Описание урока</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi suscipit voluptate accusantium quod, non quibusdam!</p>
                        </div>
                    </div>

                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="folder" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Материалы к уроку</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                                </div>
                            </div> 
                            <div class="row mt-2">
                                <div class="col-md-12">
                                    <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row border-top mt-2 pt-2 d-flex">
                        <div class="col-md-1 text-center justify-content-center align-self-center">
                            <i data-feather="message-square" class="svg-icon text-primary"></i>
                        </div>
                        <div class="col-md-11 mt-3 font-14">
                            <p>Тест к уроку</p>
                            {{-- <a href="#" class="text-success"><i data-feather="check" class="svg-icon"></i> Пройден на 100%</a> --}}
                            <a href="#" class="text-warning"><i data-feather="lock" class="svg-icon"></i> Недоступен</a>
                            {{-- <a href="#" class="text-danger"><i data-feather="alert-triangle" class="svg-icon"></i> Провален</a> --}}
                        </div>
                    </div>  
                    <div class="row border-top mt-3 pt-3">
                        <div class="col-md-12 font-14">
                            <p>Для начала пройдите предыдущий урок</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>

</div>
@endsection