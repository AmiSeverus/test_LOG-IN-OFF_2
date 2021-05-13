<?php

$result = ($_GET['result']) ? $_GET['result'] : '';

?>

<form name='calc' method="POST" action="calc.php">
    <input required step=0.0001 type="number" name='num1'>&nbsp&nbsp<span>Введите 1 число</span>
    <br><br>
    <select required name='action'>
        <option>умножить</option>
        <option>разделить</option>
        <option>сложить</option>
        <option>вычесть</option>
    </select>&nbsp&nbsp<span>Выберите операцию</span>
    <br><br>
    <input required step=0.0001 type="number" name='num2'>&nbsp&nbsp<span>Введите 2 число</span>
    <br><br>
    <input type="submit" value='='>
</form>
<div style="width: 175px; height: 1,1em; border: 1px solid black">Результат = <?php echo $result; ?></div>

