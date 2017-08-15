<?php
$num1 = (int)$_POST['num1'];
$num2 = (int)$_POST['num2'];
$operator = $_POST['operator'];
echo "Выполняемое действие: $num1 $operator $num2 <br />";
$result = calc($num1, $num2, $operator);

function calc($num1, $num2, $operator){
    switch($operator){
        case "+":
            return $num1 + $num2;
            break;
        case "-":
            return $num1 - $num2;
            break;
        case "*":
            return $num1 * $num2;
            break;
        case "/":
            if ($num2 == 0){
                trigger_error(ERR_DIV_BY_ZERO, E_USER_ERROR);
                echo "<br />";
            }
            return $num1 / $num2;
            break;
        default:
            return "";
    }
}
?>

<!-- Область основного контента -->
    Результат вычисления: <?= $result ?>
    <form action='<?= $_SERVER['REQUEST_URI'] ?>' method=POST>
      <label>Число 1:</label>
      <br />
      <input name='num1' type='text' />
      <br />
      <label>Оператор: </label>
      <br />
      <input name='operator' type='text' />
      <br />
      <label>Число 2: </label>
      <br />
      <input name='num2' type='text' />
      <br />
      <br />
      <input type='submit' value='Считать'>
    </form>
    <!-- Область основного контента -->
