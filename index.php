<?php
///////////////////////////
// function print_o($v) {
//   echo '<pre>';
//   var_dump($v);
//   echo '</pre>';
// }
///////////////////////////

for ($it = 1; $it < 5; $it++) {
  echo '<a href= "photo.php?id=' . $it . '">' . 'Картинка ' . '№' . $it . '</a>' . '<br>'; 
}
echo '<br>'; echo '<br>'; echo '<hr>'; echo '<br>';

// Калькулятор          /////

function show_form() {

  echo '<form action="" method="post">'; 
  echo '<input type="text" name="a" />';
  echo '+';
  echo '<input type="text" name="b" />';
  echo '<input type="submit" value="=" />'; 
  echo '</form>';
  }
  // Функция вывода результата.
  function show_result($a, $b) {
  $result = $a + $b;
  echo '<p>';
  echo "$a + $b = <b>$result</b>";
  echo '</p>';
  echo '<p>';
  echo '<a href="">Хочу суммировать еще</a>'; echo '</p>';
  }
  // Точка входа.
  // Показываем результат операции или форму ввода.
  if (isset($_POST['a']) && isset($_POST['b'])) {
    show_result($_POST['a'], $_POST['b']);
    }
    else
    {
        show_form();
    }





