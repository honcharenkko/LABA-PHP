<?php
// Пример 1: Вывод текста
echo "Гончаренко Микита ТВ-12\n";

// Пример 2: Операторы и переменные
$a = 5;
$b = 3;
$sum = $a + $b;
echo "Сумма чисел $a и $b равна: " . $sum;

// Пример 3: Условный оператор if else
$age = 10;
if ($age >= 18) {
    echo "\nВы совершеннолетний";
} else {
    echo "\nВы несовершеннолетний";
}

// Пример 4: Цикл for
for ($i = 1; $i <= 5; $i++) {
    echo "\nИтерация номер $i ";
}

// Пример 5: Функции
function square($num) {
    return $num * $num;
}

$result = square(4);
echo "\nКвадрат числа 4 равен: " . $result;
?>

<?php
// Создание кэша массива
$cache = [];


function getData($key) {
    global $cache;


    if (isset($cache[$key])) {

        echo "\nПолучены данные из кэша: " . $cache[$key] ;
        return $cache[$key];
    } else {

        echo "\nПолучены данные из источника данных";
        $data = "\nДанные для ключа $key";
        $cache[$key] = $data;
        return $data;
    }
}


$key = "12345";

$data1 = getData($key);
$data2 = getData($key);

// Вывод полученных данных
echo "\nПолучены данные 1: " . $data1;
echo "\nПолучены данные 2: " . $data2;
?>


<?php
// Определение класса-родителя
class Animal {
    protected $name;

    // Конструктор класса-родителя
    public function __construct($name) {
        $this->name = $name;
        echo "Создан объект класса Animal с именем: " . $this->name;
    }

    // Метод класса-родителя
    public function speak() {
        echo "Животное издает звук";
    }
}

// Определение класса-потомка, наследующего класс-родителя Animal
class Dog extends Animal {
    // Конструктор класса-потомка
    public function __construct($name) {
        // Вызов конструктора родительского класса
        parent::__construct($name);
        echo "\nСоздан объект класса Dog с именем: " . $this->name;
    }

    // Переопределение метода класса-потомка
    public function speak() {
        echo "\nСобака гавкает: Гав-гав!";
    }
}

// Создание объекта класса-потомка Dog
$dog = new Dog("Бобик");

// Вызов метода speak() класса-потомка
$dog->speak();
?>