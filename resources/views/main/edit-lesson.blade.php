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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="input-group mt-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i data-feather="lock" class="svg-icon text-danger"></i></span>
                            </div>
                            <input type="text" class="form-control custom-shadow border-0" value="Урок №1" aria-describedby="basic-addon1" readonly>
                        </div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="pl-2">Наименование урока</h6>
                        <input type="text" id="course-name" name="course-name" class="form-control custom-shadow border-0" value="Учимся подключать Ардуино к компу" placeholder="Наименование урока">
                    </div>
                    <div class="col-md-12 mb-3">
                        <div id="player" style="--plyr-color-main: #5f76e8;" data-plyr-provider="youtube" data-plyr-embed-id="YG7wwSzQ37A"></div>
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="pl-2">Ссылка на урок</h6>
                        <input type="text" id="video-ref" name="video-ref" class="form-control custom-shadow border-0" value="https://feathericons.com/" placeholder="Ссылка на урок">
                    </div>
                    <div class="col-md-12 mb-3">
                        <h6 class="pl-2">Описание урока</h6>
                       <textarea class="border-0 w-100 pl-2 custom-shadow" rows="5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea ullam adipisci minus quibusdam dicta quasi?</textarea>
                    </div>
                    <div class="col-md-12 mb-3 border-bottom pb-3">
                        <h6 class="pl-2">Материалы к уроку</h6>
                        <div class="row d-flex pl-2">
                            <div class="col-md-4 justify-content-center align-self-center mt-2">
                                <a href="#"><i data-feather="paperclip" class="svg-icon text-primary"></i> Document.pdf</a>
                            </div>
                            <div class="col-md-7 justify-content-center align-self-center mt-2">
                                <input type="text" name="docs-info" class="form-control border-0 custom-shadow font-14" value="Краткая информация по документу"> 
                            </div>
                            <div class="col-md-1 justify-content-center align-self-center mt-2">
                                <a href="#" class="btn btn-outline-danger"><i data-feather="trash" class="svg-icon"></i></a>
                            </div>
                        </div>
                        <button class="btn btn-primary mt-3 ml-2">
                            <i data-feather="folder-plus" class="svg-icon"></i>
                            Добавить новый</button>
                    </div>


                    <div class="col-md-12 mb-3 border-bottom pb-3">
                        <h6 class="pl-2">Комментарии к уроку</h6>
                        <div class="row mt-4 pl-2">
                            <div class="col-md-8 mb-2 border-left">   
                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                <div class="row ml-2">
                                    <a href="#" class="font-14 text-danger">Удалить</a>   
                                </div>
                            </div>
                            <div class="col-md-8 mb-2 border-left">   
                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                <div class="row ml-2">
                                    <a href="#" class="font-14 text-danger">Удалить</a>   
                                </div>
                            </div>
                            
                            <div class="col-md-8 mb-2 ml-5">   
                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                <a href="#" class="font-14 text-danger pl-2">Удалить</a> 
                            </div>

                            <div class="col-md-8 mb-2 border-left">   
                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                <div class="row ml-2">
                                    <a href="#" class="font-14 text-danger">Удалить</a>   
                                </div>
                            </div>
                            <div class="col-md-8 mb-2 border-left">   
                                <h5><span class="badge badge-pill badge-light text-primary"><i data-feather="at-sign" class="svg-icon text-primary"></i> Azimzhan Dauletov</span></h5> 
                                <p class= "pl-2 pt-2 font-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Possimus, adipisci.</p>
                                <div class="row ml-2">
                                    <a href="#" class="font-14 text-danger">Удалить</a>   
                                </div>
                            </div>
                            
                        </div>
                    </div>


                    <div class="col-md-12">
                        <h6 class="pl-2 mb-4">Тест к уроку</h6>
                        
                        <!-- QUIZ QUESTION CARD-->
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident, ipsam?</h5>
                                    </div>
                                    <div class="card-body">
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text bg-light">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                              </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Вариант ответа" value="Вариант №1">
                                            <a href="#" class="btn text-danger"><i data-feather="x" class="svg-icon"></i></a>
                                        </div>

                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text bg-light">
                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                              </div>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Вариант ответа" value="Вариант №1">
                                            <a href="#" class="btn text-danger"><i data-feather="x" class="svg-icon"></i></a>
                                        </div>
                                        <div class="row mb-2">
                                            <div class="col-md-12">
                                                {{-- <span class="badge badge-pill badge-success">Вопрос используется для контроля внимания</span> --}}
                                                <h6>Использовать для вопроса контроля внимания?</h6> 
                                                <input type="checkbox" checked data-toggle="toggle" data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="light">
                                            </div>
                                            <div class="col-md-12">
                                                <input type="text" class="form-control mt-3 border-0 custom-shadow w-25 mb-2" value="11:55" placeholder="На какой минуте показать вопрос">
                                            </div>
                                        </div>

                                        <button class="btn btn-primary mb-2 font-12" data-toggle="modal" data-target="#addNewAnswerModal">Добавить новый вариант ответа</button>
                                        <a href="#" class="btn btn-danger mb-2 font-12">Удалить вопрос</a>

                                        <!---ADD NEW ANSWER MODAL -->
                                        <div class="modal fade" id="addNewAnswerModal" tabindex="-1" role="dialog" aria-labelledby="addNewAnswerModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body p-4">
                                                        <div class="text-center">
                                                            <i class="dripicons-information h1 text-info"></i>
                                                            <p class="mt-3">Новый вариант ответа</p>
                                                            <input type="text" class="form-control custom-shadow mt-2 mb-2" placeholder="Вариант ответа">
                                                            <a href="#" class="btn btn-outline-success my-2" data-dismiss="modal">Добавить</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!---END ADD NEW ANSWER MODAL -->


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END QUIZ QUESTION CARD-->
                        
                        <div class="row">
                            <div class="col-md-4 offset-md-4 text-center">
                                <button class="btn btn-outline-primary mb-2 text-center" data-toggle="modal" data-target="#addNewQuestionModal">Добавить вопрос</button>
                            </div>
                        </div>

                        <!---ADD NEW QUESTION MODAL -->
                        <div class="modal fade" id="addNewQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addNewQuestionModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body p-4">
                                        <div class="text-center">
                                            <h3>Добавление нового вопроса</h3>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="text" class="form-control mt-2 mb-2 custom-shadow" placeholder="Вопрос" required>
                                                </div>
                                                <div class="col-md-12">
                                                    <p class="font-12 text-left pl-2 mb-1 mt-2">Вариантов ответа</p>
                                                    <div class="customize-input w-30 mb-4">
                                                        <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mt-2 mb-2">
                                                    <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                          <div class="input-group-text bg-light">
                                                            <input type="checkbox" aria-label="Checkbox for following text input">
                                                          </div>
                                                        </div>
                                                        <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Вариант ответа">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <a href="#" class="btn btn-outline-success my-2" data-dismiss="modal">Добавить</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!---END ADD NEW QUESTION MODAL -->

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection