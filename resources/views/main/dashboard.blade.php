@extends('layouts.app')

@section('title')
<div class="row">
        <div class="col-12 align-self-center">
            <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Приветствую, Азимжан!</h3>
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb m-0 p-0">
                        <li class="breadcrumb-item"><a href="index.html">Доступные Вам курсы</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        {{-- <div class="col-5 align-self-center">
            <div class="customize-input float-right">
                <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                    <option selected>Робототехника</option>
                    <option value="1">Математика</option>
                    <option value="2">Физика</option>
                </select>
            </div>
        </div> --}}
    </div>
@endsection

@section('container')
    {{-- <!-- No courses block -->
    <div class="row">
        <div class="col-md-4 offset-md-4 mt-5 text-center">
            <img src="img/start-edu.svg" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-3 text-center">
            <h3 class="mt-4">Кажется вы ничего не изучаете</h3>
            <a href="#" class="btn btn-primary mt-3">Вперед к знаниям</a>
        </div>
    </div>
    <!-- End No courses block --> --}}

    {{-- <div class="row">
        <div class="col-lg-6 mb-5 col-md-12 d-flex align-items-stretch">
            <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg');">
                <div class="movie-card__overlay"></div>
                <div class="card-body text-right ">
                    <div class="movie-card__header">
                        <h3 class="movie-card__title">Проекты на Ардуино</h3>
                        <p class="movie-card__info">Сложность: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </p>
                    </div>
                    <p class="movie-card__desc">A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator.</p>
                </div>
                <div class="card-footer text-right" style="z-index: 1; background: rgba(0,0,0,0);">
                    <a href="#" class="btn btn-success mb-2">Начать обучение</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-5 col-md-12 d-flex align-items-stretch">
            <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg'); background-size: cover;">
                <div class="movie-card__overlay"></div>
                <div class="card-body text-right ">
                    <div class="movie-card__header">
                        <h3 class="movie-card__title">Blade Runner</h3>
                        <h6 class="movie-card__info">(1982) Sci-Fi, Thriller</h6>
                    </div>
                    <p class="movie-card__desc">A blade runner must pursue and try to terminate four replicants who stole a ship in space and have returned to Earth to find their creator.</p>
                </div>
                <div class="card-footer text-right" style="z-index: 1; background: rgba(0,0,0,0);">
                    <a href="#" class="btn btn-success">Начать обучение</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pt-4" style="background: rgba(0,0,0,0);">Продолжите обучение</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5 mb-5 offset-md-2">
                            <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg');">
                                <div class="movie-card__overlay"></div>
                                <div class="card-body text-right ">
                                    <div class="movie-card__header">
                                        <h3 class="movie-card__title">Урок №1</h3>
                                        <p class="movie-card__info">Курс "Проекты на ардуино"</p>
                                    </div>
                                    </div>
                                <div class="card-footer text-right" style="z-index: 1; background: rgba(0,0,0,0);">
                                    <a href="#" class="btn btn-success">Продолжить</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 mb-5">
                            <a href="#">
                                <div class="card d-flex align-self-center">
                                    <div class="card-body text-center">
                                        <div class="movie-card__header pt-3">
                                            <i class="fas fa-plus-square fa-2x"></i>
                                            <h5 class="mt-2">Или начните изучать что нибудь новое</h5>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Teacher courses -->
    <div class="row">
        <div class="col-md-6 mb-5">
            <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg');">
                <div class="movie-card__overlay"></div>
                <div class="card-body text-right ">
                    <div class="movie-card__header">
                        <h3 class="movie-card__title">Проекты на ардуино</h3>
                        <p class="movie-card__info">Робототехника</p>
                    </div>
                    </div>
                <div class="card-footer text-right" style="z-index: 1; background: rgba(0,0,0,0);">
                    <a href="#" class="btn btn-primary"> <i data-feather="edit-3" class="svg-icon text-light"></i> Редактировать</a>
                    <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#confirmationModal">
                        <i data-feather="trash" class="svg-icon"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-5 d-flex align-items-stretch">
            <a href="#">
                <div class="card d-flex align-self-center">
                    <div class="card-body text-center">
                        <div class="movie-card__header pt-3">
                            <i class="fas fa-plus-square fa-2x"></i>
                            <h5 class="mt-2">Добавить новый курс</h5>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- END Teacher courses -->

    <!---Delete course confirm modal -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content bg-danger">
                <div class="modal-body p-4">
                    <div class="text-center text-light">
                        <i class="dripicons-information h1"></i>
                        <h4 class="mt-2"><i class="fas fa-info"></i></h4>
                        <p class="mt-3">Вы действительно хотите удалить курс "Проекты на ардуино"?</p>
                        <button type="button" class="btn btn-light my-2" data-dismiss="modal">Нет</button>
                        <a href="#" class="btn btn-secondary my-2" data-dismiss="modal">Да</a>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <!---END Delete course confirm modal -->
@endsection
