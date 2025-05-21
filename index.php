<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>TV.TEHNON.com.ua</title>
  <link rel="icon" type="image/png" href="green-uicon.png">
  <style>
        body {
            
            background: linear-gradient(to right,rgb(27, 70, 27),rgb(81, 247, 131)); /* Синий-фиолетовый градиент */
            color: maroon;
            
        }

         /* Модальное окно */
    #modal,#modal2,#modal3,#modal4,#modal5,#modal6 {
      display: none;
      position: fixed;
      z-index: 999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.4);
    }

    #modalContent {
      background-color: #e6f7ff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #aaa;
      width: 90%;
      max-width: 500px;
      border-radius: 8px;
      position: relative;
    }

    #modal h3,#modal2 h3,#modal3 h3,#modal4 h3,#modal5 h3,#modal6 h3 {
      color: #004080;
      text-align: center;
    }

    #modal ul,#modal2 ul,#modal3 ul,#modal4 ul,#modal5 ul,#modal6 ul {
      padding-left: 20px;
      margin-top: 15px;
    }

    #modal li,#modal2 li,#modal3 li,#modal4 li,#modal5 li,#modal6 li {
      margin-bottom: 10px;
    }

    .closeBtn {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 20px;
      font-weight: bold;
      color: red;
      background: none;
      border: none;
      cursor: pointer;
    }

    .closeBottom {
      display: block;
      margin: 20px auto 0;
      background-color: #3399ff;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }
  </style>
</head>
<body>
<?php
$a = [
  "1. Жим штанги лежа                        4 по (7-10)",
  "2. Жим гантелей вверх стоя перед собой    4 по (7-10)",
  "3. Тяга штанги в наклоне (спина)          4 по (7-10)",
  "4. Подъем гантелей на бицепс стоя         4 по (7-10)",
  "5. Французский жим гантелей сидя трицепс  4 по (10-12)",
  "6. Приседания со штангой                  4 по (7-10)",
  "7. Становая тяга                          3 по (10-12)",
  "8. Подъем ног перед собой в висе (пресс)  3 по (20-25)"
];

$b = [
  "1. Жим штанги на наклонной скамье 45град   4 по (7-10)",
  "2. Подъемы гантелей поочередно перед собой 4 по (10-12)",
  "3. Подтягивания широким хватом к груди (+вес) 4 по (7-10)",
  "4. Подъем штанги на бицепс стоя            4 по (7-10)",
  "5. Жим штанги лежа узким хватом трицепс    4 по (7-10)",
  "6. Приседания со штангой                   4 по (7-10)",
  "7. Мертвая тяга (прямые ноги) бицепс бедра 3 по (10-12)",
  "8. Подъемы тела на наклонной сидя (пресс)  3 по (20-25)"
];

$c = [
  "1. Жим штанги на наклонной скамье 45град   4 по (7-10)",
  "2. Тяга штанги к подбородку (дельты)       4 по (7-10)",
  "3. Подтягивания широким хватом за спину (+вес) 4 по (7-10)",
  "4. Тяга нижнего блока сидя к животу (спина) 4 по (7-10)",
  "5. Французский жим изогн. штанги лежа      4 по (10-12)",
  "6. Приседания со штангой                  4 по (7-10)",
  "7. Становая тяга                           3 по (10-12)",
  "8. Подъем тела лежа ноги закреплены        3 по (20-25)"
];

$d = [
  "1. Тяга штанги к подбородку (дельты)       4 по (7-10)",
  "2. Жим гантелей вверх стоя перед собой     3 по (10-12)",
  "3. Подъемы гантелей поочередно перед собой 3 по (10-12)",
  "4. Подтягивания обратным хватом (бицепс) (+вес) 4 по (7-10)",
  "5. Подъем штанги на бицепс стоя            3 по (7-10)",
  "6. Жим штанги лежа узким хватом трицепс    4 по (7-10)",
  "7. Французский жим сидя с гирей трицепс    4 по (7-10)",
  "8. Приседания со штангой                   2 по (12-15)",
  "9. Склепки в висе (пресс)                  3 по (12-15)"
];

$e = [
  "1. Жим штанги лежа                         3 по (7-10)",
  "2. Жим штанги на наклонной скамье 45град   4 по (7-10)",
  "3. Отжимания на брусьях (грудь)    (+вес)  3 по (7-10)",
  "4. Тяга верхнего блока к груди широк. хватом 4 по (7-10)",
  "5. Тяга штанги в наклоне (спина)             3 по (7-10)",
  "6. Тяга нижнего блока сидя к животу (спина)  3 по (7-10)",
  "7. Приседания со штангой                    2 по (12-15)",
  "8. Склепки лежа (пресс)                     3 по (20-25)"
];

$f = [
  "1. Приседания со штангой                   5 по (7-10)",
  "2. Мертвая тяга (прямые ноги) бицепс бедра 5 по (10-12)",
  "3. Подъемы с гантелями в руках на носки (голень) 5 по (12-15)",
  "4. Жим штанги на наклонной скамье 45град   3 по (10-12)",
  "5. Подъем штанги на бицепс стоя            3 по (10-12)",
  "6. Французский жим на трицепс стоя (гантель/гиря) 3 по (10-12)",
  "7. Подъем тела лежа ноги закреплены        2 по (20-25)"
];

// Точно так же определите массивы $c, $d, $e, $f

?>

  <?php  require "blocks/header.php" ?>
  
  <div class="container mt-5">
  <img src="img/3333.jpg" class="img-fluid mx-auto d-block" alt="Центрированная картинка" style="max-width: 350px;">
    <br/>
  <h3 class="mb-5">Смотрите программы Ваших любимых каналов.    Настройтесь на самое лучшее</h3>

   
    
  
  <?php
// Функция для получения фильмов с API
function fetchMovies() {
    $apiKey = "4e5548c37fdfda0975c70c0688c24955";
    $url = "https://api.themoviedb.org/3/discover/movie?api_key=$apiKey";

    $response = file_get_contents($url);
    if ($response === FALSE) {
        return [];
    }

    $data = json_decode($response, true);
    return $data['results'] ?? [];
}

$movies = fetchMovies();

// Узнаем, сколько фильмов показывать
$visibleMovies = isset($_GET['visible']) ? intval($_GET['visible']) : 10;
if ($visibleMovies > count($movies)) {
    $visibleMovies = count($movies);
}
?>

  <div style="display: flex; flex-wrap: wrap; justify-content: center; max-width: 100%; padding: 10px; box-sizing: border-box;">
    
    <!-- 6 блоков -->
    <div style="flex: 0 0 45%; margin: 10px; background-color: lightblue; height: 280px; text-align: center; line-height: 100px; border-radius: 10px;">
      CNN </br>
    <iframe
        src="https://www.livenewsmag.com/livecnn/"
        title="Sky News Live"
        frameBorder="0"
        allow="encrypted-media"
       
      ></iframe>
    </div>

    <div style="flex: 0 0 45%; margin: 10px; background-color: lightcoral; height: 280px; text-align: center; line-height: 100px; border-radius: 10px;">
      FOX NEWS </br>
    <iframe
        src="https://www.livenewsmag.com/fox-news-live-stream/"
        title="Sky News Live"
        frameBorder="0"
        allow="encrypted-media"
       
      ></iframe>
    </div>

    <div style="flex: 0 0 45%; margin: 10px; background-color: lightgreen; height: 280px; text-align: center; line-height: 100px; border-radius: 10px;">
      MSNBC </br>
      <iframe
        src="https://www.livenewsmag.com/msnbc-news-live-stream/"
        title="Sky News Live"
        frameBorder="0"
        allow="encrypted-media"
       
      ></iframe>
    </div>

    <div style="flex: 0 0 45%; margin: 10px; background-color: lightgoldenrodyellow; height: 100px; text-align: center; line-height: 100px; border-radius: 10px;">
      Block 4
    </div>

    <div style="flex: 0 0 45%; margin: 10px; background-color: lightseagreen; height: 100px; text-align: center; line-height: 100px; border-radius: 10px;">
      Block 5
    </div>

    <div style="flex: 0 0 45%; margin: 10px; background-color: lightsalmon; height: 100px; text-align: center; line-height: 100px; border-radius: 10px;">
      Block 6
    </div>

  </div>

  <h1>Movie List</h1>

<ul>
    <?php for ($i = 0; $i < $visibleMovies; $i++): ?>
        <li><?php echo htmlspecialchars($movies[$i]['title']); ?></li>
    <?php endfor; ?>
</ul>

<?php if ($visibleMovies < count($movies)): ?>
    <form method="get">
        <input type="hidden" name="visible" value="<?php echo $visibleMovies + 5; ?>">
        <button type="submit">Load More</button>
    </form>
<?php endif; ?>
  </div>
  
  <?php  require "blocks/footer.php" ?>
  
</body>
</html>
