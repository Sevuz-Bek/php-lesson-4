<?php
// Функцции арифметических операций

function addition($arg_1, $arg_2) {
  return ($arg_1 + $arg_2);
}
function subtraction($arg_1, $arg_2) {
  return ($arg_1 - $arg_2);
}
function multiplication($arg_1, $arg_2) {
  return ($arg_1 * $arg_2);
}
function division($arg_1, $arg_2) {
  if ($arg_2 != 0) {
    return ($arg_1 / $arg_2);
  }else 
    return 'На ноль делить нельзя!';
}

// Функцция вывода результата

function get_result($a, $b, $operation) {
  switch ($operation) {
    case '+':
      $result = addition($a, $b);
      break;
    case '-':
      $result = subtraction($a, $b);
      break;
    case '*':
      $result = multiplication($a, $b);
      break;
    case '/':
      $result = division($a, $b);
      break;  
  }
  return $result;
}