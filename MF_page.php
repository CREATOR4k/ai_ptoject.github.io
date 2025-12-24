<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Математико-Иностранный Профиль | Поступление 2025</title>
    <style>
        /* Основные стили */
:root {
    --primary: #2563eb;
    --secondary: #3b82f6;
    --dark: #1e293b;
    --light: #f8fafc;
    --accent: #10b981;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    line-height: 1.6;
    color: var(--dark);
    background-color: var(--light);
}

header {
    background: white;
    padding: 1rem 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.logo {
    font-weight: bold;
    font-size: 1.5rem;
    color: var(--primary);
}

nav a {
    margin-left: 20px;
    text-decoration: none;
    color: var(--dark);
    font-weight: 500;
    transition: 0.3s;
}

nav a:hover {
    color: var(--primary);
}

.hero {
    background: linear-gradient(135deg, #1e293b 0%, #2563eb 100%);
    color: white;
    padding: 100px 5%;
    text-align: center;
}

.hero h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2rem;
    max-width: 800px;
    margin: 0 auto 30px;
}

.btn {
    background: var(--accent);
    color: white;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    text-decoration: none;
    transition: 0.3s;
}

.btn:hover {
    background: #059669;
    transform: translateY(-2px);
}

.features {
    padding: 80px 5%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0,0,0,0.05);
    border-top: 5px solid var(--primary);
}

.card h3 {
    color: var(--primary);
    margin-top: 0;
}

.form-group {
    margin-bottom: 20px;
    text-align: left;
}

input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #cbd5e1;
    border-radius: 4px;
    box-sizing: border-box;
}

footer {
    background: var(--dark);
    color: white;
    text-align: center;
    padding: 40px;
    margin-top: 50px;
}

.out {
    cursor: pointer;
    display: inline-block;
    

}
    </style>
</head>
<body>

    <header>
        <div class="logo">Математика & Иностранный</div>
        <nav>
        <a href="#about">О профиле</a>
        <div class="out" onclick="window.location.href='logout.php'">Выйти</div>
        </nav>
    </header>

    <section class="hero">
        <h1>Математика + Иностранные языки</h1>
        <p>Стань востребованным специалистом на стыке технологий и глобальных коммуникаций. Программа 2025 года открыта для абитуриентов.</p>
        <a href="#apply" class="btn">Подать заявку</a>
    </section>

    <section class="features" id="about">
        <div class="card">
            <h3>Бизнес-информатика</h3>
            <p>Изучение архитектуры предприятий, анализа данных и международного бизнес-права на английском языке.</p>
        </div>
        <div class="card">
            <h3>Компьютерная лингвистика</h3>
            <p>Математические модели языка, создание ИИ-переводчиков и систем распознавания речи (NLP).</p>
        </div>
        <div class="card">
            <h3>Data Science & Global Markets</h3>
            <p>Анализ мировых рынков с использованием продвинутой статистики и машинного обучения.</p>
        </div>
    </section>

    

    <footer>
    <p> 2025 Математико-иностранный факультет. Все права защищены. ©</p>
    </footer>

</body>
</html>

       
        