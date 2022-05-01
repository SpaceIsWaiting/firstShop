@extends('layout')
@section('title')Отзывы
@endsection
@section('main_content')
    <h1>Форма добавления отзыва</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>
        </div>
    @endif
    <form class="needs-validation" novalidate="" method="post" action="/review/check">
        @csrf
        <div class="row g-3">
            <div class="col-12">
                <label for="username" class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username123">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="p@ckman.b">
            </div>
            <div class="col-12">
                <label for="review" class="form-label">Отзыв</label>
                <textarea name="review" id="review" class="form-control" placeholder="Введите ваш отзыв" cols="30" rows="10"></textarea>
            </div>


            <button class="w-100 btn btn-primary btn-lg btn-success" type="submit">Нажмите для отправки</button>
        </div>
    </form>
    <h1>Все отзывы</h1>
    <br>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{$el->review}}</h3>
            <b>{{$el->username}}</b>
        </div>
    @endforeach
@endsection
