<?php 
include 'functions.php';

if (isset($_POST['a']) && isset($_POST['b'])) {
  if(isset($_POST['addition'])) {
    $operation = '+';
  }
  elseif(isset($_POST['subtraction'])) {
    $operation = '-';
  }
  elseif(isset($_POST['multiplication'])) {
    $operation = '*';
  }
  elseif(isset($_POST['division'])) {
    $operation = '/';
  }
  $result = get_result($_POST['a'], $_POST['b'], $operation);
}
?>

<form action="calc_2.php" method="post">

  <input type="text" name="a" placeholder="Введите число" value="<?=$_POST['a']?>">
  <b><?= $operation ?></b>
  <input type="text" name="b" placeholder="Введите число" value="<?=$_POST['b']?>">
  <b> = <?= $result ?></b> <br>
  <input type="submit" value="+" name="addition">
  <input type="submit" value="-" name="subtraction">
  <input type="submit" value="*" name="multiplication">
  <input type="submit" value="/" name="division">
</form>