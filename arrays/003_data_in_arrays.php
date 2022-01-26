<?php
// Полезные массивы с данными. В этом задании мы научимся хранить данные в массивах
// Для хранения однородных структурированных данных очень хорошо подходят ассоциативные массивы


// 1. Создайте ассоциативный массив животных $animals
// данные, которые нужно хранить в этом массиве: мышь - это грызун, конь - скачет по полям, хрюшка - кушает желуди
$animals = array(]

    "mouse"=>"животное грызун",
    "hourse"=>"скачет по полям",
    "pig"=>"кушает желуди"
    
    );


// 2. Доработаем этот массив, добавим в него больше данных, теперь для каждого животного у нас будет не только описание, но и другие параметры:
// мышь - это грызун, 4 лапы, хвост: лысый
// конь - скачет по полям, 4 ноги, хвост: пушистый
// хрюшка - кушает желуди, 4 ноги, хвост: крючком

$animals = array(
    'mouse' =>  array(

        'decription'   => 'животное грызун',
        "legsCount"    => 4,
        "tail"         => "bald",   // лысый

    ),
    'hourse' => array(

        'decription'   => 'скачет по полям',
        "legsCount"    => 4,
        "tail"         => "fluffy", // пушистый 

    ),
    'pig' =>    array(

        'decription'   => 'кушает желуди',
        "legsCount"    => 4,
        "tail"         => "hook", // крючком 

    ),
);

// 3. Добавим еще одно уточнение, теперь мы знаем, чуть больше о хвостах:
// хвост мыши - лысый, 10 см
// хвост коня - пушистый, 50 см
// хвост хрюшки - крючком, 4 см
$animals = array(
    'mouse' =>  array(

        'decription'   => 'животное грызун',
        "legsCount"    => 4,
        "tail"         => array(

            "type"   => "bald",   // лысый
            "length" => 4
        ),

    ),
    'hourse' => array(

        'decription'   => 'скачет по полям',
        "legsCount"    => 4,
        "tail"         => array(

            "type"   => "fluffy", // пушистый 
            "length" => 50
        ),

    ),
    'pig' =>    array(

        'decription'   => 'кушает желуди',
        "legsCount"    => 4,
        "tail"         => array(

            "type"   => "hook", // крючком 
            "length" => 4
        ),

    ),
);



// 4. А теперь опишем, ферму на которой живут эти животный. На ферме есть разные домики для зверьков.
// Создайте массив $buildings с описанием домов, ключом каждого дома сделайте название дома на английском языке
// На ферме есть следующие дома:
// Жилой дом, этажей 2, цвет - синий
// Стойла, этаже 1, цвет - зеленый
// Будка, этажей 1, цвет - красный
// Элитный-гараж, этажей 5, цвет - черный
$buildings = array(

    'residential home' = (

        "nameBuilding" => "residential home", // Жилой дом
        "countLevels"  => 2,
        "color"        => "blue"
    ),
    'Stalls' =  (

        "nameBuilding" => "Stalls", //Стойла
        "countLevels"  => 1,
        "color"        => "green"

    ),
    'Cabin' =  (

       "nameBuilding" => "Cabin",  //Будка
        "countLevels"  => 1,
        "color"        => "red"

    ),
    'Elite-garage' =  (

        "nameBuilding" => "Elite-garage", //Элитный-гараж
         "countLevels"  => 5,
         "color"        => "black" 

     )
);


// 5. Теперь нам нужно расселить животных по домам, добавьте каждому животному поле, в котором укажите где оно живет
// В качестве значения используйте ключ из массива $buildings
// мышь живет в жилом доме
// конь живет в стойле
// хрюшка тоже живет в стойле
$animals = array(

    'mouse' =>  array(

        'decription'   => 'животное грызун',
        "legsCount"    => 4,
        "tail"         => array(

                    "type"   => "bald",   // лысый
                    "length" => 4
        ),

        "nameBuilding" => "residential home", 

    ),
    'horse' => array(

        'decription'   => 'скачет по полям',
        "legsCount"    => 4,
        "tail"         => array(

                    "type"   => "fluffy", // пушистый 
                    "length" => 50
        ),

        "nameBuilding" => "Stalls",

    ),
    'pig' =>    array(

        'decription'   => 'кушает желуди',
        "legsCount"    => 4,
        "tail"         => array(

                    "type"   => "hook", // крючком 
                    "length" => 4
        ),

        "nameBuilding" => "Stalls",

    ),
);


// 6. Теперь нам нужно поделиться информацией о всей ферме с кем-то, но на почте нам сказали, что мы можем отправить только одну переменную
// Создайте переменную $farm с двумя полями animals и buildings и поместите в них значения из соответствующих массивов
$farm = [
    
    "animals"   => $animals,
    "buildings" => $buildings

];


// 7. Теперь представим, что вы получатель этого письма.
// Почта наконец пришла и вы открыли конверт, а там массив $farm. Используя этот массив, выполните следующее:
// выведите сколько лап у хрюшки
var_dump($farm['animals']['pig']['legsCount']);

// выведите какого цвета будка
var_dump($farm['buildings']['Cabin']['color']);

// выведите длину хвоста местных коней
var_dump($farm['animals']['horse']['tail']['length']);

// Выведите название помещения, в котором живет мышь
var_dump($farm['mouse']['nameBuilding']);

// создайте переменную $animal и поместите в нее имя одного любого животного из названий животных
// используйте имя на английском языке, т.е. один из ключей массива $animals
// Выведите описание животного, на который указывает значение переменной $animal
$animal = 'horse';
var_dump($animals[$animal]['decription']);
