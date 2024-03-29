@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-7 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Все курсы</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="#">доступные на платформе Starkid</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col-5 align-self-center">
        <div class="customize-input float-right">
            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                <option selected>Робототехника</option>
                <option value="1">Математика</option>
                <option value="2">Физика</option>
            </select>
        </div>
    </div>
</div>
@endsection

@section('container')
<div class="row">
    <div class="col-md-12 border-bottom pb-1 mb-3">
        <h4>Робототехника</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 mb-5 col-md-12 d-flex align-items-stretch">
        <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg');">
            <div class="movie-card__overlay"></div>
            <div class="card-body text-right ">
                <div class="movie-card__header">
                    <h3 class="movie-card__title">Проекты на Ардуино</h3>
                    <p class="movie-card__info">Сложность: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </p>
                    <h5 class="movie-card__title mt-3">
                        <span class="badge  badge-primary font-16">15 500 тенге</span>
                    </h5>
                </div>
                <p class="movie-card__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officia, esse officiis error quas earum ad.</p>
            </div>
            <div class="card-footer text-right" style="z-index: 99; background: rgba(0,0,0,0);">
                <a href="{{url('about')}}" class="btn btn-light mb-2">О курсе</a>
                <a href="{{url('lessons-info')}}" class="btn btn-success mb-2">Начать обучение</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-5 col-md-12 d-flex align-items-stretch">
        <div class="card" style="background-image: url('https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg');">
            <div class="movie-card__overlay"></div>
            <div class="card-body text-right ">
                <div class="movie-card__header">
                    <h3 class="movie-card__title">Проекты на Ардуино</h3>
                    <p class="movie-card__info">Сложность: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> </p>
                    <h5 class="movie-card__title mt-3">
                        <span class="badge  badge-primary font-16">Бесплатно</span>
                    </h5>
                </div>
                <p class="movie-card__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illo alias cum quisquam nesciunt nobis.</p>
            </div>
            <div class="card-footer text-right" style="z-index: 99; background: rgba(0,0,0,0);">
                <a href="{{url('about')}}" class="btn btn-light mb-2">О курсе</a>
                <a href="{{url('lessons-info')}}" class="btn btn-success mb-2">Начать обучение</a>
            </div>
        </div>
    </div>
</div>


@endsection