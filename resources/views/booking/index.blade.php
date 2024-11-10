@extends('layouts.app')

@section('content')
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #FFFFFF;
        color: #002B5C;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    .header {
        padding: 20px;
        font-size: 24px;
        font-weight: bold;
        text-align: center;
    }
    .search-box {
        display: flex;
        padding: 10px 20px;
        border: 1px solid #ccc;
        margin: 10px 20px;
        border-radius: 5px;
    }
    .search-box input {
        flex: 1;
        border: none;
        outline: none;
        font-size: 16px;
    }
    .search-box .icon {
        margin-right: 10px;
        font-size: 18px;
    }
    .service-item {
        padding: 15px 20px;
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
    }
    .service-title {
        font-size: 18px;
        font-weight: bold;
    }
    .service-subtitle {
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }
    .map-placeholder {
        width: 100%;
        height: 200px;
        background-color: #ddd;
        border: 1px solid #ccc;
        border-radius: 5px;
        margin-bottom: 10px;
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
    .content {
        flex: 1;
        padding-bottom: 60px; /* Отступ для фиксации футера */
    }
</style>
<div class="header">Выберите сервис</div>

<div class="search-box">
    <span class="icon">🔍</span>
    <input type="text" placeholder="Найти">
</div>

<div class="content">

    <a href="{{route('booking.auto')}}">
        <div class="service-item">
        <div class="service-title">Базис-Сервис - Окружная дорога 11 км, 6</div>
        <div class="service-subtitle">ул. Окружная дорога 11 км, 6</div>
        <div class="map-placeholder" style="background: url({{url('img/map/map1.png')}}) no-repeat center center / cover;">

        </div>
    </div>
    </a>

    <a href="{{route('booking.auto')}}">
    <div class="service-item">
        <div class="service-title">Базис-Сервис - Федюнинского, 83</div>
        <div class="service-subtitle">ул. Федюнинского, 83</div>
        <div class="map-placeholder" style="background: url({{url('img/map/map1.png')}}) no-repeat center center / cover;">
        </div>
    </div>
    </a>
</div>



@endsection
