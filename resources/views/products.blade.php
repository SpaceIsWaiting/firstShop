@extends('layout')
@section('title')Страница товаров
@endsection
@section('header')
    <header class="py-3 mb-4">
        <div class="container d-flex flex-wrap justify-content-center">
            <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-3">Магазин товаров</span>
            </a>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
        </div>
    </header>
@endsection

@section('main_content')
    @foreach($products as $product)
        <div class="container">
            <div class="row">
                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

                <!-- Заставит следующие колонки переходить на новую строку -->
                <div class="w-100"></div>

                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
            </div>
        </div>
    @endforeach
@endsection
