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
    <add-course-component></add-course-component>
@endsection
