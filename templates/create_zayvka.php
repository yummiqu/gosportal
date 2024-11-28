<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <? require '../osnova/setup.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создать заявку</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<header>
          <? require '../osnova/header1.php'; ?>
     </header>
<main>
    <div class="create">
        <p>Создать заявку</p>
    </div>
    <form id="sozdanie" class="sozdanie" method="POST" action='insert.php' enctype="multipart/form-data">
        <p>Создать заявку</p>
        <div class="block_zayvka">
            <label for="name">Название:</label>
            <input type="text" name="name" class="name" required> <br>
            
            <label for="context">Описание:</label>
            <textarea name="context" required></textarea><br>
            
            <label for="kategoria">Категория:</label>
            <select name="kategoria" id="kategoria" required>
                <option value="">Выберите категорию</option>
                <option value="Ремонт дорог">Ремонт дорог</option>
                <option value="Замена фасада">Замена фасада</option>
                <option value="Уборка мусора">Уборка мусора</option>
            </select><br>
            
            <label for="file">Фото:</label>
            <input type="file" name="file" class="filename" accept="image/*" required><br>
            
            <button type="submit" class="btn_sozd">Создать</button>
        </div>
    </form>

    <!-- Модальное окно -->
    <div id="modal_zayvka" class="modal_zayvka" style="display:none;">
        <div class="modal_zayvka_content">
            <span class="close">&times;</span>
            <p id="modalMessage"></p>
        </div>
    </div>

    <script>
document.getElementById('sozdanie').addEventListener('submit', function(event) {
    event.preventDefault();
    console.log("Форма отправлена!");

    const formData = new FormData(this);

    fetch('insert.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        console.log(data);
        showModal(data.message);
    })
    .catch(error => {
        console.error('Ошибка:', error);
        showModal('Произошла ошибка при отправке данных.');
    });
});

    </script>
</main>

</body>
</html>