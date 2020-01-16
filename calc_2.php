<!-- криво работает - не делит  -->





<?php 
  if ($_POST['submit']) {
    $a = (int)$_POST['first'];
    $b = (int)$_POST['second'];
    $operation = $_POST['operation'];
    $result = 0;

    if ($result == '+') {
      $result = $a + $b;
    }
    elseif ($result == '-') {
      $result = $a - $b;
    }
    elseif ($result == '*') {
      $result = $a * $b;
    }
    elseif ($result == '/') {
      if ($b == 0) 
        echo 'На ноль делить нельзя';
      else $result = $a / $b;
    }
    else $result = pow($a, $b);
  }
?>

<form action="" method="post">
  <input type="textbox" name="first" required>

  <select name="operation" required>
    <option value="+"> + </option>
    <option value="-"> - </option>
    <option value="*"> * </option>
    <option value="/"> / </option>
    <option value="^"> ^ </option>
  </select>

  <input type="textbox" name="second" required>

  <input type="submit" name ="submit" value="=">
</form>
<?php 
    echo $result;
?>






<!-- <form action="" method="post">
  <input type="text" name="a" required>
  <input type="text" name="b" required>
  <input type="submit" value="=">
  <br><br>
  <input type="submit" value="+">
  <input type="submit" value="-">
  <input type="submit" value="*">
  <input type="submit" value="/">
</form> -->