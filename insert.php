
<?php
require 'connect.php';

// Создаем соединение
$conn = new mysqli('localhost', 'root', '', 'portal');

// Проверяем соединение
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получаем данные из формы
$name = $_POST['name'];
$context = $_POST['context'];
$kategoria = $_POST['kategoria'];
$file = $_FILES['file']['name'];
$tmp_name = $_FILES['file']['tmp_name'];
$upload_dir = "uploads/";
$upload_file = $upload_dir . basename($file);

// Подготавливаем и выполняем SQL-запрос
$stmt = $conn->prepare("INSERT INTO zayvki (name, context, kategoria, file) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $context, $kategoria, $file);

if ($stmt->execute()) {
    echo json_encode(['message' => 'Данные успешно отправлены!']);
} else {
    echo json_encode(['message' => 'Ошибка при отправке данных.']);
}

// Закрываем соединение
$stmt->close();
$conn->close();
?>
