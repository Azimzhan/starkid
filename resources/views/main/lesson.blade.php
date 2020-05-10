@extends('layouts.app')
@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Редактирование урока</h3>
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
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body ">

                <div id="player" style="--plyr-color-main: #5f76e8;" data-plyr-provider="youtube" data-plyr-embed-id="YG7wwSzQ37A"></div>

                <div class="row mt-2">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs nav-justified nav-bordered mb-3">
                            <li class="nav-item">
                                <a href="#about" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block"><i data-feather="align-center" class="svg-icon text-primary"></i> О уроке</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#docs" data-toggle="tab" aria-expanded="true" class="nav-link active">
                                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">
                                        <i data-feather="paperclip" class="svg-icon text-primary"></i> Материалы к уроку
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#comments" data-toggle="tab" aria-expanded="false" class="nav-link">
                                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                                    <span class="d-none d-lg-block">
                                        <i data-feather="message-circle" class="svg-icon text-primary"></i>  Комментарии
                                    </span>
                                </a>
                            </li>
                        </ul>
    
                        <div class="tab-content">
                            <div class="tab-pane" id="about">
                                <p>Leggings occaecat dolor sit amet, consectetuer adipiscing elit. Aenean
                                    commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et
                                    magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,
                                    ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa
                                    quis enim.</p>
                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                    arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam
                                    dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                    elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula,
                                    porttitor eu, consequat vitae, eleifend ac, enim.</p>
                            </div>

                            <div class="tab-pane show active" id="docs">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span><a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a> - Краткое описание для документа</span>
                                    </div>
                                </div>

                                {{-- <div class="row">
                                    <div class="col-md-12 text-center">
                                        <p>Материалы к уроку отсутствуют</p>
                                    </div>
                                </div> --}}

                            </div>

                            <div class="tab-pane" id="comments">
                                <div class="row">
                                    <div class="col-md-12 m-2">

                                        <h6 class="mb-3 pb-3 border-bottom">Все комментарии</h6>
                                        <div class="row">
                                            <div class="col-md-8 mb-2 border-left">   
                                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                                <div class="row ml-2">
                                                    <a href="#" class="font-12">Ответить</a>
                                                    <p class="pl-2 font-10 align-right"> 05.04.2020 </p>     
                                                </div>
                                            </div>

                                            <div class="col-md-8 mb-2 ml-5">   
                                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                                <p class="pl-2 font-10 align-right"> 05.04.2020 </p>
                                            </div>
                                        </div> 

                                        {{-- <!-- NO COMMENTS BLOCK --> 
                                        <h1 class="text-center"><i data-feather="message-circle" class="svg-icon text-primary "></i></h1> 
                                        <p class="text-center text-primary">zZz...</p>
                                        <p class="text-center">Пока нет комментариев</p>
                                        <!-- END NO COMMENTS BLOCK -->  --}}

                                        <div class="row d-flex">
                                            <div class="col-md-11 border-top pt-2 pl-3">
                                                <textarea class="w-100 border-0 font-14" rows="3" placeholder="Прокомментировать...." required></textarea>
                                            </div>
                                            <div class="col-md-1 text-right justify-content-center align-self-center">
                                               <button class="btn btn-primary"> <i data-feather="send" class="svg-icon"></i></button>
                                            </div>
                                        </div>
                                    </div>
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