<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../style.css">
    <? require '../osnova/setup.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мои заявки</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<main>

<?php

require '../connect.php';

$sql = "SELECT * FROM zayvki";
$result = $mysqli->query($sql);
$count = mysqli_num_rows($result);
    if ($count> 0){
?>



<br><table border="1" class="table">
<thead>
    <tr>
        <th>Название</th>
        <th>Описание</th>
        <th>Категории</th>
        <th>Фото</th>
    </tr>
</thead>
<tbody>

<?php
while($row = $result->fetch_assoc()){
?>

<tr>
    <td><?echo ($row['name']);?></td>
    <td><?echo ($row['context']);?></td>
    <td><?echo ($row['kategoria']);?></td>
    <td><?echo ($row['file']);?></td>
    
</tr>

<?php } ?>

</table>

<?php
    }else{
        echo "Таких значений нет";
    }
    $mysqli->close();
    
?>
</main>

</body>
</html>