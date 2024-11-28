<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: index.php"); // Перенаправление на страницу входа, если пользователь не авторизован
    exit();
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="style.css">
</head>

<main>
<div class="lichkab">
<p>Личный кабинет</p>
</div>
<div class="info_user">
    <img src="img/user.png" alt="photouser">
    <div class="info_user_dann">
    <p>ФИО: <?php echo htmlspecialchars($_SESSION['fio']); ?></p>
    <p>Логин: <?php echo htmlspecialchars($_SESSION['login']); ?></p>
    <p>E-mail: <?php echo htmlspecialchars($_SESSION['email']); ?></p>
    </div>
</div>
<button class="exitkab"> <a href="templates/logout.php">Выйти из аккаунта </a></button>
<div class="zayavka_kab">
<h2>МОИ ЗАЯВКИ</h2>
<div class="sort_kab">
<p>Сортировка: 
        <select name="sort" id="sort">\
        <option value=""></option>
        <option value="Новая">Новая</option>
        <option value="Решена">Решена</option>
        <option value="Отклонена">Отклонена</option>
    </select> </p>
    </div>
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

