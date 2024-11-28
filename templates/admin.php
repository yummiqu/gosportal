<?php
session_start();
if (!isset($_SESSION['login']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php"); // Перенаправление на страницу входа, если пользователь не авторизован
    exit();
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="../style.css">
<? require '../osnova/setup.php'; ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
     <header>
          <? require '../osnova/header.php'; ?>
     </header>
<main>
<div class="lichkab">
<p>Личный кабинет</p>
</div>
<div class="info_user">
    <img src="img" alt="photouser">
    <p>ФИО: <?php echo htmlspecialchars($_SESSION['fio']); ?></p>
    <p>Логин: <?php echo htmlspecialchars($_SESSION['login']); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
</div>
<button class="exitkab"> <a href="templates/logout.php">Выйти из аккаунта </a></button>
<div class="zayavka_kab">
<h2>МОИ ЗАЯВКИ</h2>
<p>Сортировка: 
        <select name="sort" id="sort">
        <option value=""></option>
        <option value=""></option>
        <option value=""></option>
    </select> </p>
    <div class="zayavka_1">
        <h3>Ремонт детской площадки</h3>
        <p>Отремонтируйте площадку около нашего<br>
         дома, иначе она вся развалится.</p><br>
        <p>Категория - Ремонт площадки</p>
        <p>10.06.2023</p>
        <div class="status">
            <p>&#x2713; РЕШЕНА</p>
        </div>
    </div>
</div>
</main>

