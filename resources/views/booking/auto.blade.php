<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор автомобиля</title>
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
            box-sizing: border-box;
        }
        .header {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            border-bottom: 1px solid #ccc;
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #fff;
            z-index: 1000;
        }
        .back-button {
            margin-right: 15px;
            font-size: 18px;
            cursor: pointer;
        }
        .header-title {
            font-size: 18px;
            font-weight: 700;
        }
        .header-subtitle {
            font-size: 12px;
            font-weight: 400;
            color: #666;
        }
        .main {
            flex: 1;
            padding: 20px;
            margin-top: 60px; /* Высота хедера */
            margin-bottom: 60px; /* Высота футера */
        }
        .main-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            text-align: center;
        }
        .select-box {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #fff;
            appearance: none; /* Убирает стандартные стрелки */
        }
        .button {
            width: 100%;
            padding: 15px;
            background-color: #002B5C;
            color: #FFFFFF;
            font-size: 16px;
            font-weight: bold;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            text-align: center;
            margin-top: 20px;
        }
        .footer {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            border-top: 1px solid #ccc;
            background-color: #FFFFFF;
            position: fixed;
            bottom: 0;
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
</head>
<body>

<div class="header">
    <div class="back-button">←</div>
    <div>
        <div class="header-title">Базис-Сервис - Федюнинского, 83</div>
        <div class="header-subtitle">ул. Федюнинского, 83</div>
    </div>
</div>

<div class="main">
    <div class="main-title">Выбор автомобиля</div>
    <select class="select-box">
        <option>Марка</option>
        <option>BMW</option>
        <option>Audi</option>
        <option>Mercedes</option>
    </select>
    <select class="select-box">
        <option>Модель</option>
        <option>3 Series</option>
        <option>A4</option>
        <option>C-Class</option>
    </select>
    <button class="button">Записаться на СТО</button>
</div>

<div class="footer">
    <div class="footer-item">
        <div class="footer-icon">🏠</div>
        <div>Главная</div>
    </div>
    <div class="footer-item">
        <div class="footer-icon">🚗</div>
        <div>Автомобиль</div>
    </div>
    <div class="footer-item active">
        <div class="footer-icon">🏷️</div>
        <div>Запись</div>
    </div>
    <div class="footer-item">
        <div class="footer-icon">🔍</div>
        <div>Новости</div>
    </div>
    <div class="footer-item">
        <div class="footer-icon">💬</div>
        <div>Поддержка</div>
    </div>
</div>

</body>
</html>
