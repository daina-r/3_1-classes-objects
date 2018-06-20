<?php
// Машина
class Car
{
    public $mark;
    public $model;
    public $color;
    public function __construct($mark, $model, $color)
    {
        $this->mark = $mark;
        $this->model = $model;
        $this->color = $color;
    }
    public function getCar()
    {
        echo $this->mark . ' / ' . $this->model . ' / ' . $this->color;
    }
}
$carAudi = new Car('Audi', 'R8', 'red');
$carBMV = new Car('BMV', 'X5', 'black');
// Телевизор
class TV
{
    public $mark;
    public $resolution;
    public $color;
    public function __construct($mark, $resolution, $color)
    {
        $this->mark = $mark;
        $this->resolution = $resolution;
        $this->color = $color;
    }
    public function getTV()
    {
        echo $this->mark . ' / ' . $this->resolution . ' / ' . $this->color;
    }
}
$tvLG = new TV('LG', '4K', 'black');
$tvSony = new TV('Sony', 'FULL HD', 'white');
// Шариковая ручка
class BallpointPen
{
    public $mark;
    public $collection;
    public $color;
    public function __construct($mark, $collection, $color)
    {
        $this->mark = $mark;
        $this->collection = $collection;
        $this->color = $color;
    }
    public function getPen()
    {
        echo $this->mark . ' / ' . $this->collection . ' / ' . $this->color;
    }
}
$penParker = new BallpointPen('Parker', 'Jotter', 'blue');
$penPero = new BallpointPen('Pero', 'Caran', 'red');
// Утка
class Duck
{
    public $breed;
    public $dwelling;
    public function __construct($breed, $dwelling)
    {
        $this->breed = $breed;
        $this->dwelling = $dwelling;
    }
    public function getDuck()
    {
        echo $this->breed . ' / ' . $this->dwelling;
    }
}
$duckPekin = new Duck ('Пекинская утка', 'Китай');
$duckRussia = new Duck ('Русская утка', 'Россия');
// Товар
class Goods
{
    public $name;
    public $category;
    public $price;
    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
    }
    public function getGoods()
    {
        echo $this->name . ' / ' . $this->category . ' / ' . $this->price;
    }
}
$goodsApple = new Goods('iPhone', 'Телефон', 25000);
$goodsSamsung = new Goods('Samsung S8', 'Телефон', 24000);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Классы и объекты</title>
</head>
<body>
    <div>
        <p>1. Инкапсуляция - это закрытие части кода в обособленную структуру. Она позволяет объединить переменные и функции и их параметры, связать их с конкретными объектами одного порядка. Это помогает ничего не перепутать и быстро ориентироваться.</p><br />
        <p>2. Плюсы объектов - более чистый код, возможность собрать все переменные и функции, которые нужны для объекта, в одном месте. Объекты и классы позволяют убрать повторения в коде. Если нужно что-то поменять, то меняется код только в классе, а во всех объектах этого класса он поменяется автоматически. Без использования классов и объектов пришлось бы менять все вручную. Минусы - то, что из-за этой закрытой структуры не так просто в любом месте кода изменить какую-нибудь защищенную переменную.</p><br /><br />
    </div>
<div>
    <ul>Пример вывода:
        <li> <?php $carAudi->getCar();?></li>
        <li> <?php $tvLG->getTV();?></li>
        <li> <?php $penParker->getPen();?></li>
        <li> <?php $duckPekin->getDuck();?></li>
        <li> <?php $goodsApple->getGoods();?></li>
    </ul>

    <a href="news.php">Перейти к доп заданию (новости)</a>
</div>
</body>
</html>