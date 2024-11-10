@extends('layouts.auth')

@section('content')


    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            width: 90%;
            max-width: 400px;
            border: 1px solid #ccc;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .subtitle {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }
        .input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .description {
            font-size: 12px;
            color: #666;
            margin-bottom: 20px;
        }
        .button {
            width: 100%;
            padding: 12px;
            background-color: #002B5C;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
        }
        .privacy-text {
            font-size: 12px;
            color: #666;
            margin-top: 20px;
        }
        .privacy-text a {
            color: #002B5C;
            text-decoration: none;
        }







        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #FFFFFF;
            color: #002B5C;
            display: flex;
            flex-direction: column;
            height: 100vh;
            overflow: hidden;
        }
        .header {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            background-color: #fff;
            z-index: 1000;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .profile-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #DDDDDD;
            margin-right: 10px;
        }
        .user-name {
            font-size: 18px;
            font-weight: 700;
        }
        .content {
            flex: 1;
            padding: 20px;
            margin-top: 70px; /* Высота хедера */
            margin-bottom: 60px; /* Высота футера */
            overflow-y: auto;
        }
        .button {
            width: 100%;
            padding: 15px;
            background-color: #002B5C;
            color: #fff;
            text-align: center;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .slider {
            display: flex;
            overflow-x: auto;
            gap: 10px;
            padding-bottom: 10px;
            scrollbar-width: none; /* Для Firefox */
            -ms-overflow-style: none; /* Для IE и Edge */
        }
        .slider::-webkit-scrollbar {
            display: none; /* Для Chrome, Safari и Opera */
        }
        .slider-item {
            flex: 0 0 auto;
            width: 120px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 20px;
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            background-color: #f9f9f9;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .add-button {
            position: fixed;
            bottom: 80px; /* Расположить над футером */
            right: 20px;
            width: 50px;
            height: 50px;
            background-color: #002B5C;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 30px;
            line-height: 50px;
            cursor: pointer;
            z-index: 1000;
        }
        .footer {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            border-top: 1px solid #ccc;
            background-color: #FFFFFF;
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        .footer-item {
            text-align: center;
            font-size: 12px;
        }
        .footer-icon {
            font-size: 18px;
            display: block;
            margin-bottom: 5px;
            color: #000;
        }
        .active .footer-icon {
            color: #002B5C;
        }
    </style>
    <div class="container">

        <form method="POST" action="{{ route('login') }}">
            @csrf
        <div class="title">Введите номер телефона</div>
        <div class="subtitle">чтобы войти или стать клиентом BAZIS MOTORS</div>
            @error('email')
            <p class="text-sm text-red-600">{{ $message }}</p>
            @enderror
        <input name="email" class="input" required placeholder="Email">
            <input name="password" class="input" required placeholder="Пароль">
        <div class="description">На указанный номер придет SMS с кодом для подтверждения входа</div>
        <button class="button" type="submit">Получить код</button>
        <div class="privacy-text">
            Нажимая на кнопку «Получить код», я даю согласие на
            <a href="#">обработку своих персональных данных</a>
        </div>
        </form>

    </div>
@endsection
