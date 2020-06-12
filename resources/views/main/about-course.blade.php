@extends('layouts.app')

@section('title')
<div class="row">
    <div class="col-12 align-self-center">
        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">О курсе</h3>
        <div class="d-flex align-items-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb m-0 p-0">
                    <li class="breadcrumb-item"><a href="index.html">Проекты по Ардуино</a>
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
                            <img src="https://st.depositphotos.com/1686208/2202/v/450/depositphotos_22028491-stock-illustration-symbols-of-physics.jpg" alt="" class="img-fluid" style=" box-shadow: 0 2px 9px 0 rgba(169, 184, 200, 0.2);">
                            
                        </div>
                        <div class="col-md-6">
                            <h1 class="border-bottom pb-2 mt-3">Проекты по Ардуино</h1>
                            {{-- <span class="badge badge-pill badge-success mt-3">Вы изучаете этот курс</span> --}}
                            <span class="badge badge-pill badge-light mt-3">Робототехника</span>
                            <br>
                            <h5 class="mt-3">Автор: Азимжан Даулетов</h5>
                            <h5>Сложность: <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></h5>
                            <h5>Количество уроков: 5</h5> 
                            <a href="" class="btn btn-success mt-4" data-toggle="modal" data-target="#confirmationModal">Начать изучение</a>
                            {{-- <a href="" class="btn btn-outline-success mt-4">Продолжить обучение</a> --}}
                        </div>
                    </div>
                     <div class="row">
                         <div class="col-md-12">
                            <h4 class="mt-4 border-bottom pb-3">О курсе</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt perspiciatis impedit soluta? Laudantium eum labore porro, nisi pariatur quas deleniti impedit ex iusto atque hic amet. Officiis illum provident quibusdam doloribus dolor perspiciatis. Magnam, sit? Eveniet minus optio nostrum fugiat quasi aspernatur minima ipsa velit doloribus provident aliquid distinctio, qui voluptatum eligendi aliquam possimus nisi id alias soluta magnam dolores repellat. Quos quis doloribus maxime nostrum expedita illo. Exercitationem, aut quia quam error quod eveniet consequuntur debitis nobis autem officia eum. Itaque officia placeat cum labore, dolores minima temporibus doloribus voluptates in exercitationem nam hic iste tenetur aperiam maxime. Eius ab magni tenetur ipsum animi qui aspernatur nobis excepturi. Voluptas eius porro eaque unde? Quidem illum porro iste temporibus! Minima cumque excepturi sit voluptate esse dignissimos numquam, nihil in corrupti minus debitis, optio officiis ea. Vel consequatur praesentium, et repellendus ratione minus, tenetur reprehenderit facilis soluta harum quisquam, maiores laudantium?</p>
                         </div>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <!---ADD COURSE CONFIRM MODAL -->
    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-body p-4">
                    <div class="text-center">
                        <i class="dripicons-information h1 text-info"></i>
                        <h4 class="mt-2"><i class="fas fa-info"></i></h4>
                        <p class="mt-3">Вы действительно хотите продолжить обучение?</p>
                        <button type="button" class="btn btn-outline-secondary my-2" data-dismiss="modal">Нет</button>
                        <a href="{{url('/lessons-info')}}" class="btn btn-outline-success my-2">Начать обучение</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection