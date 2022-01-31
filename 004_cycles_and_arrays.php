<?php

// Циклы для данных в массивах

// 1. Создайте массив скучных игрушек - $boringToys. 
// Создайте в нем случайное количество элементов от 1 до 10, 
// где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000


/*Создаем в массиве случайное количество элементов от 1 до 10  */

$count = rand(1, 10);

$boringToys = [];
for ($i = 0; $i < $count; $i++) {

    // каждый элем. массива - ассоц-й массив с 2 полями

    $boringToys[$i] = [
        'nameToy' => 'Toy number = ' . ($i + 1),   //Название игрушки: в виде "Игрушка 1"
        'priceToy' => rand(100, 1000)    // Цена игрушки: случайное число от 100 до 1000
    ];

    // выводим на экран 

    echo $boringToys[$i]['nameToy'] . PHP_EOL;
    echo 'Toy price: ' . $boringToys[$i]['priceToy'] . PHP_EOL;

}

// Дан массив $cars. Состоящий из трех машин со следующими данными: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
$cars = [
    [
        'name' => 'Мерседес',
        'price' => 10000,
        'colors' => [],
    ],
    [
        'name' => 'BMW',
        'price' => 9999,
        'colors' => [],
    ],
    [
        'name' => 'Автобус',
        'price' => 20000,
        'colors' => [],
    ],
];


// 2. Посчитайте и выведите стоимость стоимость всех машин
$allCarsSum = 0;
foreach ($cars as $car) {
    $allCarsSum += $car['price'];
}
echo $allCarsSum;

// 3. Для каждой машины заполните поле colors. 
//В этом поле должны хранится все возможные варианты цветов для этой машины,
// при чем для каждого этого цвета, есть своя надбавка к стоимости (разная для разных машин)

// Создайте массив colors с цветами доступными для каждой машины. 
//И случайным образом выберите из этого массива по 3 цвета для каждой машины. 
//Эти цвета добавьте в массив $cars в поле colors. 

//Для каждого цвета также укажите случайную надбавку к цене - случайное число от 0 до 100
// Выведите итоговый массив $cars c помощью функции var_dump и убедитесь в его правильности.

$colors = [
    [
        'color' => 'green',
        'upSale' => rand(0, 100),
    ],
    [
        'color' => 'blue',
        'upSale' => rand(0, 100),
    ],
    [
        'color' => 'gray',
        'upSale' => rand(0, 100),
    ],
    [
        'color' => 'black',
        'upSale' => rand(0, 100),
    ],
    [
        'color' => 'white',
        'upSale' => rand(0, 100),
    ],

];

foreach ($cars as $iCar => $car) {
    for ($i = 0; $i < 3; $i++) {
        $cars[$iCar]['colors'][] = $colors[rand(0,4)];
    }
}
var_dump($cars);

// 4. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде:
// "Купите автомобиль {} цвета {} всего за: {} руб"
// вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете. 

// УЖЕ ВСТРОИЛ В ЦИКЛ
// echo 'Купите автомобиль ' . $cars[$x]['name'] . ' цвета ' . $cars[$x]['colors']['color'][$x]  . ' всего за: ' .  $cars[$x]['colors']['upSale'] . ' руб';
// СТРОКА номер 174
foreach ($cars as $iCar => $car) {
    foreach ($car['colors'] as $color) {
        echo 'Купите автомобиль ' . $car['name'] . ' цвета ' . $color['color'] . ' всего за: ' . ($car['price'] + $color['upSale']) . ' руб' . PHP_EOL;
    }
}

