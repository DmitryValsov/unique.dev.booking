@extends('layouts.auth')

@section('content')


    <div class="container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="title">Введите номер телефона</div>
        <div class="subtitle">чтобы войти или стать клиентом BAZIS MOTORS</div>
        <input name="email" type="email" class="input" placeholder="+7" required>
        <div class="description">На указанный номер придет SMS с кодом для подтверждения входа</div>

            <div class="col-md-6" style="display: none;">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            </div>

        <button class="button" type="submit">Получить код</button>
        <div class="privacy-text">
            Нажимая на кнопку «Получить код», я даю согласие на
            <a href="#">обработку своих персональных данных</a>
        </div>
        </form>
    </div>
@endsection
