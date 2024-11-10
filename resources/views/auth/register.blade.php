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
            margin-bottom: 20px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 15px;
        }
        .form-label {
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        .input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
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
            margin-top: 20px;
        }

    </style>
    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
        <div class="title">Ваши данные</div>
        <div class="form-group">
            <label for="name" class="form-label">Имя*</label>
            <input type="text" id="name" name="name" class="input" placeholder="Введите имя" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">E-Mail*</label>
            <input type="email" id="email" name="email" class="input" placeholder="Введите email" required>
        </div>
            <div class="form-group">
                <label for="name" class="form-label">Пароль*</label>
                <input type="text" id="name" name="password" class="input" placeholder="Введите имя" required>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Подтверждение пароля*</label>
                <input type="text" id="name" name="password_confirmation" class="input" placeholder="Введите имя" required>
            </div>
        <button class="button">Стать клиентом</button>
        </form>
    </div>
@endsection
