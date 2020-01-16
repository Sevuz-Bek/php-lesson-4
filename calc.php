<?php
include 'functions.php';

if (isset($_POST['a']) && isset($_POST['b'])) {
  $operation = $_POST['operation'];
  $result = get_result($_POST['a'], $_POST['b'], $operation);
}
// phpinfo()
?>

<form action="calc.php" method="post">

  <input type="text" name="a" placeholder="Введите число" value="<?=$_POST['a']?>">
  <select name="operation">
    <option value="+" <?php if($operation == '+') echo 'selected = "selected"'; ?> > + </option>
    <option value="-" <?php if($operation == '-') echo 'selected = "selected"'; ?>> - </option>
    <option value="*" <?php if($operation == '*') echo 'selected = "selected"'; ?>> * </option>
    <option value="/" <?php if($operation == '/') echo 'selected = "selected"'; ?>> / </option>
  </select>
  <input type="text" name="b" placeholder="Введите число" value="<?=$_POST['b']?>">
  <b> = <?= $result ?></b> <br>
  <input type="submit" value="Как работает эта кнопка?">
</form>