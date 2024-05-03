<?php

/**
 * Скрипт для работы с классом Cat.
 */

// Подключаем класс Cat
require_once 'Cat.php';

// Создаем массив объектов Cat
$cat1 = new Cat("Мурзик", 2, ["коричневый", "белый"]);
$cat2 = new Cat("Васька", 4, ["серый", "черный"]);
$cat3 = new Cat("Пушистик", 3, ["оранжевый"]);
$cat4 = new Cat("Снежок", 5, ["белый"]);
$cat5 = new Cat("Тигрёнок", 1, ["полосатый"]);
$cat1 = new Cat("Азазело", 33, ["разношерстный"]);// добавил 1/5 котов
$cat2 = new Cat("Бегемот", 32, ["толстый"]);// добавил 2/5 котов
$cat3 = new Cat("Мастер", 31, ["добрый"]);// добавил 3/5 котов
$cat4 = new Cat("Маргарита", 30, ["красивая"]);// добавил 4/5 котов
$cat5 = new Cat("Коровьев", 29, ["хитрый"]);// добавил 5/5 котов

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