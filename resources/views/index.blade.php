<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Личный кабинет</title>
    <style>
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
</head>
<body>

<div class="header">
    <div class="profile-circle"></div>
    <div class="user-name">Егор &gt;</div>
</div>

<div class="content">
    <button class="button" onclick="location.href = 'http://127.0.0.1:8000/booking/';">Записаться на СТО</button>

    <div class="section">
        <div class="section-title">Сервисы</div>
        <div class="slider">
            <div class="slider-item">Оформление ОСАГО</div>
            <div class="slider-item">Оформление КАСКО</div>
            <div class="slider-item">Сервис 3</div>
            <div class="slider-item">Сервис 4</div>
            <div class="slider-item">Сервис 5</div>
            <div class="slider-item">Сервис 6</div>
        </div>
    </div>

    <div class="section">
        <div class="section-title">Акции</div>
        <div class="slider">
            <div class="slider-item">Акция 1</div>
            <div class="slider-item">Акция 2</div>
            <div class="slider-item">Акция 3</div>
            <div class="slider-item">Акция 4</div>
            <div class="slider-item">Акция 5</div>
            <div class="slider-item">Акция 6</div>
        </div>
    </div>
</div>

<div class="add-button">+</div>

<div class="footer">
    <div class="footer-item active">
        <div class="footer-icon">🏠</div>
        <div>Главная</div>
    </div>
    <div class="footer-item">
        <div class="footer-icon">🚗</div>
        <div>Автомобиль</div>
    </div>
    <div class="footer-item">
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

<script>
    document.querySelectorAll('.slider').forEach(slider => {
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2; // Скорость прокрутки
            slider.scrollLeft = scrollLeft - walk;
        });
    });
</script>

</body>
</html>
