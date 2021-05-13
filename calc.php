<?php
switch ($_POST['action']){
    case "умножить":
        $result = $_POST['num1'] * $_POST['num2'];
        break;
    case 'разделить':
        $result = $_POST['num1'] / $_POST['num2'];
        break;        
    case 'сложить':
        $result = $_POST['num1'] + $_POST['num2'];
        break;
    case 'вычесть':
        $result = $_POST['num1'] - $_POST['num2'];
        break;
    default:
        $result = 'Что-то пошло не так';
        break;        
};

//test - имя моего домена

header("Location: http://test/test_LOG-IN-OFF_2/index.php?result=$result");
