<?php
interface Weight
{
    public function getWeight($weight);
}
class PhisicalObject implements Weight
{
    public $weight;
    public function getWeight($weight)
    {
        $this->weight = $weight;
        echo $this->weight . '<br>';
    }
}
class Car extends PhisicalObject
{
    public $model;
    public $color;
    public $type;
    function __construct($model, $color, $type)
    {
        echo $this->model = $model . ' - ';
        echo $this->color = $color . ', ';
        echo $this->type = $type . ', ';
        $this->getWeight(1200);
    }
}
$toyota = new Car('Corolla', 'red', 'sedan');
$honda = new Car('Civic', 'green', 'hatchback');
class Tv extends PhisicalObject
{
    public $brand;
    function Getbrand()
    {
        echo $this->brand . '<br>';
    }
    function Setbrand($brand)
    {
        $this->brand = $brand;
        $this->Getbrand();
    }
}
$lg = new Tv;
$lg->Setbrand('LG');
$lg->getWeight(5);
$sony = new Tv;
$sony->Setbrand('SONY');
$sony->getWeight(4.5);
class Pen extends PhisicalObject
{
    public $ink_color;
    public $material;
    public $brand;
    function __construct($brand, $ink_color, $material)
    {
        echo $this->type = $brand . ' - ';
        echo $this->color = $material . ', ';
        echo $this->ink_color = $ink_color . '.<br/>';
        $this->getWeight(0.01);
    }
}
$bic_pen = new Pen('BIC', 'red', 'plastic');
$parker_pen = new Pen('Parker', 'blue', 'metal');
class Duck extends PhisicalObject
{
    public $name;
    public $sex;
    function __construct($name, $sex)
    {
        echo $this->name = $name . ': ';
        echo $this->sex = $sex . '.<br/>';
        $this->getWeight(1.5);
    }
}
$duck1 = new Duck('Donald', 'he is');
$duck2 = new Duck('Duffy', 'she is');
class Product extends PhisicalObject
{
    public $category;
    public $price;
    public $availability;
    function __construct($category, $price, $availability)
    {
        echo $this->category = $category . '. ';
        echo $this->price = $price . '$. ';
        echo $this->availability = $availability . '.<br/>';
        $this->getWeight('Look on the package');
    }
}
$meizuM2 = new Product('phones', 100, 'n/a');
$oldspice = new Product('deodorant', '10', 'available');








