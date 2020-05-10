@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Добавление нового курса</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">в систему Starkid</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@endsection

@section('container')
<div class="row about-course">
    <div class="col-md-12">
        <div class="card mt-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 justify-self-center">
                        <img src="https://lh3.googleusercontent.com/proxy/dRI8CSW__vkQ3kdRZMCkjBbBTxIf0jXm2OcOuHqKtmPf8xR7D8qFJTyj0bwtaFyhKyqYVbwK0DkHCe6gJhWgo8A-3aPjmxEZhQ" alt="" class="img-fluid" style=" box-shadow: 0 2px 9px 0 rgba(169, 184, 200, 0.2);">  
                    </div>
                    <div class="col-md-6">
                        <input type="text" id="course-name" name="course-name" class="form-control form-control-lg custom-shadow border-0" placeholder="Наименование курса">
                        {{-- <span class="badge badge-pill badge-success mt-3">Вы изучаете этот курс</span> --}}
                        <h6 class="mt-3 mb-0 pl-2">Категория курса</h6>
                        <select class="w-50 mb-2 custom-select custom-select-set form-control bg-white text-secondary mt-2 border-0 custom-shadow">
                            <option value="1">Робототехника</option>
                            <option value="2">Математика</option>
                            <option value="3">Физика</option>
                        </select>
                        <br>
                        <div class="input-group mt-2 mb-2">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="basic-addon1"><i data-feather="lock" class="svg-icon text-danger"></i></span>
                            </div>
                            <input type="text" class="form-control custom-shadow border-0" value="Автор: Азимжан Даулетов" aria-describedby="basic-addon1" readonly>
                        </div>
                        <select class="w-75 custom-select custom-select-set form-control bg-white text-secondary mt-2 border-0 custom-shadow">
                            <option selected> Средний - 3</option>
                            <option value="1">Супер легкий - 1</option>
                            <option value="2">Физика</option>
                        </select>
                    </div>
                </div>
                 <div class="row">
                     <div class="col-md-12">
                        <h4 class="mt-4 border-bottom pb-3">О курсе</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="about-course" rows=15 class="form-control border-0 text-left custom-shadow" placeholder="Информация о курсе"></textarea>
                            </div>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-4 text-center">
                        <button class="btn btn-outline-primary mt-3 mb-2 pl-2" >Добавить курс</button>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
       <h4 class="mt-4 border-bottom pb-3">Уроки</h4>
        <div class="row mt-3 mb-2">
            
            {{-- <div class="col-md-12">
                <div class="card custom-shadow">
                    <div class="card-body">
                        <div class="card-title">
                            Урок 1
                        </div>
                        <div class="row border-bottom">
                            <div class="col-md-12">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure illum qui laboriosam possimus nihil?</p>
                                <p class="align-middle">Тест: <i data-feather="check" class="svg-icon text-success"></i></p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <h6>Прикрепленные документы</h6>
                                <p class="align-middle"><i data-feather="paperclip" class="svg-icon text-primary"></i> Документ.pdf</p>
                            </div>
                        </div>
                    </div>
                </div> 
            </div> --}}

            <div class="col-md-12 text-center">
               <h3><i data-feather="video-off" class="svg-icon text-danger mt-3 mb-3"></i></h3> 
                <p>Пока нет добавленных уроков</p>
            </div>
            <div class="col-md-4 offset-md-4 text-center mt-4">
                <button class="btn btn-outline-primary mb-2 text-center" data-toggle="modal" data-target="#addNewLessonModal">Добавить урок</button>
            </div>
        </div>
    </div>
</div>

<!---ADD NEW LESSON MODAL -->
<div class="modal fade" id="addNewLessonModal" tabindex="-1" role="dialog" aria-labelledby="addNewLessonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <p class="mt-1">Добавление нового урока</p>
                </div>
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
                                        <input type="text" id="course-name" name="course-name" class="form-control custom-shadow border-0" placeholder="Наименование урока">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <div id="player" style="--plyr-color-main: #5f76e8;" data-plyr-provider="youtube" data-plyr-embed-id=""></div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h6 class="pl-2">Ссылка на урок</h6>
                                        <input type="text" id="video-ref" name="video-ref" class="form-control custom-shadow border-0" placeholder="Ссылка на урок">
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <h6 class="pl-2">Описание урока</h6>
                                       <textarea class="border-0 w-100 pl-2 custom-shadow" rows="5"></textarea>
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
                
                                    <div class="col-md-12">
                                        <h6 class="pl-2 mb-4">Тест к уроку</h6>
                                        
                                        <!-- QUIZ QUESTION CARD-->
                                        <div class="row mt-2">
                                            <div class="col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <input type="text" class="form-control border-0 custom-shadow" placeholder="Вопрос">
                                                    </div>
                                                    <div class="card-body">
                                                        <h6 class="font-12 text-left pl-2 mb-1 mt-2">Вариантов ответа</h6>
                                                        <div class="customize-input w-30 mb-4">
                                                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>

                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                              <div class="input-group-text bg-light">
                                                                <input type="checkbox" aria-label="Checkbox for following text input">
                                                              </div>
                                                            </div>
                                                            <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="Вариант ответа">
                                                        </div>
                
                                                        <div class="row mb-2">
                                                            <div class="col-md-12">
                                                                {{-- <span class="badge badge-pill badge-success">Вопрос используется для контроля внимания</span> --}}
                                                                <h6>Использовать для вопроса контроля внимания?</h6> 
                                                                <input type="checkbox" checked data-toggle="toggle" data-on="Да" data-off="Нет" data-onstyle="success" data-offstyle="light">
                                                            </div>
                                                            <div class="col-md-12">
                                                                <h6 class="font-14 mt-3 mb-1">Укажите на какой минуте задать этот вопрос</h6>
                                                                <input type="text" class="form-control border-0 custom-shadow w-25 mb-2" value="11:55" placeholder="На какой минуте показать вопрос">
                                                            </div>
                                                        </div>
            
                                                        <a href="#" class="btn btn-danger mb-2 font-12">Удалить вопрос</a>    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END QUIZ QUESTION CARD-->
                                        
                                        <div class="row">
                                            <div class="col-md-6 offset-md-3 text-center">
                                                <button class="btn btn-outline-primary mb-2 text-center" data-toggle="modal" data-target="#addNewQuestionModal">Добавить новый вопрос</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 offset-md-4 text-center">
                        <a href="#" class="btn btn-outline-success my-2" data-dismiss="modal">Добавить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!---END ADD NEW LESSON MODAL -->

@endsection
