<?php

/**
 * Скрипт для работы с классом Cat.
 */

// Подключаем класс Cat
require_once 'Cat.php';

//изменяем логику формирования возраста котов - задаём начальный возраст и будем потом увиличивать каждому на год
$age=1;

// Создаем массив объектов Cat

$cat1 = new Cat("Мурзик", $age, ["коричневый", "белый"]);
$age++;
$cat2 = new Cat("Васька", $age, ["серый", "черный"]);
$age++;
$cat3 = new Cat("Пушистик", $age, ["оранжевый"]);
$age++;
$cat4 = new Cat("Снежок", $age, ["белый"]);
$age++;
$cat5 = new Cat("Тигрёнок", $age, ["полосатый"]);
$age++;
$cat1 = new Cat("Азазело", $age, ["разношерстный"]);// добавил 1/5 котов
$age++;
$cat2 = new Cat("Бегемот", $age, ["толстый"]);// добавил 2/5 котов
$age++;
$cat3 = new Cat("Мастер", $age, ["добрый"]);// добавил 3/5 котов
$age++;
$cat4 = new Cat("Маргарита", $age, ["красивая"]);// добавил 4/5 котов
$age++;
$cat5 = new Cat("Коровьев", $age, ["хитрый"]);// добавил 5/5 котов

$catArray = [$cat1, $cat2, $cat3, $cat4, $cat5, $cat6, $cat7, $cat8, $cat9, $cat10];


// Вычисляем сумму и произведение возрастов всех котов
$ages = array_map(fn($cat) => $cat->age, $catArray);
$sumAges = array_sum($ages);
$productAges = array_product($ages);

echo "Сумма возрастов всех котов: $sumAges\n";
echo "Произведение возрастов всех котов: $productAges\n";

// Проверяем, есть ли хотя бы один кот старше 3 лет
$hasOldCat = false;
$sumSqrtAges = 0;

foreach ($catArray as $cat) {
    if ($cat->age > 3) {
        $hasOldCat = true;
        $sumSqrtAges += sqrt($cat->age);
    }
}

if ($hasOldCat) {
    echo "Есть хотя бы один кот старше 3 лет.\n";
    echo "Сумма квадратных корней возрастов этих котов: $sumSqrtAges\n";
} else {
    echo "Нет котов старше 3 лет.\n";
}

// Выбираем случайного кота и вызываем у него метод 'error'
$randomCat = $catArray[array_rand($catArray)];
try {
    $randomCat->error();
} catch (Exception $e) {
    echo "Поймано исключение: " . $e->getMessage() . "\n";
}

?>
