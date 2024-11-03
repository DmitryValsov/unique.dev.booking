<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Выбор даты и времени</title>
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
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #fff;
            z-index: 1000;
        }
        .back-button {
            font-size: 24px;
            margin-right: 15px;
            cursor: pointer;
        }
        .header-title {
            font-size: 20px;
            font-weight: bold;
        }
        .header-subtitle {
            font-size: 14px;
            color: #666;
        }
        .content {
            flex: 1;
            padding: 20px;
            margin-top: 70px; /* Высота хедера */
            margin-bottom: 60px; /* Высота футера */
            overflow-y: auto;
        }
        .section-title {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 5px;
            margin-bottom: 20px;
        }
        .calendar div {
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
        }
        .calendar div.disabled {
            color: #ccc;
            pointer-events: none;
        }
        .calendar div:hover {
            background-color: #f0f0f0;
        }
        .selected-date {
            background-color: #002B5C;
            color: #fff;
        }
        .time-slots {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }
        .time-slot {
            padding: 10px 20px;
            border: 1px solid #002B5C;
            border-radius: 5px;
            cursor: pointer;
        }
        .time-slot.selected {
            background-color: #002B5C;
            color: #fff;
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
            position: fixed;
            bottom: 70px; /* Чтобы кнопка была над футером */
            left: 0;
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
    <div class="back-button">←</div>
    <div>
        <div class="header-title">Базис-Сервис - Федюнинского, 83</div>
        <div class="header-subtitle">ул. Федюнинского, 83</div>
    </div>
</div>

<div class="content">
    <div class="section-title">Выберите дату и время для записи</div>
    <div class="calendar" id="calendar">
        <!-- Динамически генерируемый календарь -->
    </div>

    <div class="time-slots" id="timeSlots">
        <div class="time-slot">10:00</div>
        <div class="time-slot">11:30</div>
        <div class="time-slot">12:30</div>
        <div class="time-slot">14:00</div>
        <div class="time-slot">15:00</div>
        <div class="time-slot">16:00</div>
        <div class="time-slot">17:00</div>
        <div class="time-slot">18:00</div>
        <div class="time-slot">19:00</div>
    </div>
</div>

<button class="button">Записаться</button>

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

<script>
    function createCalendar() {
        const calendar = document.getElementById('calendar');
        const currentDate = new Date();
        const currentDay = currentDate.getDate();
        const currentMonth = currentDate.getMonth();
        const currentYear = currentDate.getFullYear();

        // Названия дней недели
        const daysOfWeek = ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'];
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.style.fontWeight = 'bold';
            calendar.appendChild(dayElement);
        });

        // Определение первого дня месяца
        const firstDay = new Date(currentYear, currentMonth, 1).getDay();
        const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
        const today = new Date().setHours(0, 0, 0, 0);

        // Смещение первого дня (с учетом, что воскресенье = 7)
        const startOffset = firstDay === 0 ? 6 : firstDay - 1;

        // Добавление пустых ячеек перед началом месяца
        for (let i = 0; i < startOffset; i++) {
            const emptyCell = document.createElement('div');
            calendar.appendChild(emptyCell);
        }

        // Заполнение календаря днями месяца
        for (let day = 1; day <= daysInMonth; day++) {
            const dateElement = document.createElement('div');
            const date = new Date(currentYear, currentMonth, day);

            dateElement.textContent = day;
            if (date < today) {
                dateElement.classList.add('disabled');
            } else {
                dateElement.addEventListener('click', () => {
                    const selected = document.querySelector('.selected-date');
                    if (selected) selected.classList.remove('selected-date');
                    dateElement.classList.add('selected-date');
                });
            }
            calendar.appendChild(dateElement);
        }
    }

    document.addEventListener('DOMContentLoaded', createCalendar);

    // Обработка выбора времени
    document.getElementById('timeSlots').addEventListener('click', function(e) {
        if (e.target.classList.contains('time-slot')) {
            const selected = document.querySelector('.time-slot.selected');
            if (selected) selected.classList.remove('selected');
            e.target.classList.add('selected');
        }
    });
</script>

</body>
</html>
