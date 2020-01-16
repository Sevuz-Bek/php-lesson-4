<?php
///////////////////////////
// function print_o($v) {
//   echo '<pre>';
//   var_dump($v);
//   echo '</pre>';
// }
///////////////////////////

// функция вывода новостей                  //////

function show_list($news) {

  echo '<ul>';

  for ($i = 0; $i < count($news); $i++) {
    echo '<li>';
    echo '<a href = "news.php?id=' . ($i + 1) . '">'. $news[$i] . '</a>';
    echo '</li>';
  }
  echo '</ul';
}

// функция вывода конкретной новости    ///

function show_item($news, $id) {
  echo '<br>';
  
  echo '<a href = "news.php' . '">' . 'Вернуться к списку новостей' . '</a>' . '<br>' . '<br>';
  echo '<h2>' . $news[$id - 1] . '</h2>';
  echo '<br>';
  echo 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis amet a sint corporis tenetur ad maxime dolores odit pariatur non, molestias dolore officiis voluptas quod suscipit? Laboriosam, vero! Voluptate praesentium ea ipsum voluptatem sunt minus accusamus, corporis earum quam rem libero illo nisi necessitatibus reiciendis, distinctio obcaecati numquam, eaque nam. Tempora veritatis non magni necessitatibus possimus quibusdam ducimus et, laboriosam in quae vero autem, facilis, hic soluta sequi nobis debitis eligendi minima ratione! Fugit alias odio ducimus aspernatur totam maxime libero quo suscipit architecto ratione neque optio a fuga rerum repellendus voluptatem, sed dicta voluptates nobis magnam reiciendis! Ut, maiores?';
}


// массив новостей                    ///

$news = [
  'Высоцкий и «Битлз»: как советский бард относился к ливерпульской четвёрке',
  'А слышал ли бард «Битлов» вообще?',
  'О великих музыкантах - либо хорошо, либо ничего',
  'Высоцкий встречался с Харрисоном: правда или нет'
];

if (isset($_GET['id'])) {
  show_item($news, $_GET['id']);
}else {
  show_list($news);
}

echo '<br>' . '<pre>';  //почему без тега БР не отрабатывает ПРЕ  ???
var_dump($news);
echo '</pre>';