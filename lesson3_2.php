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
    }
}
class  Car extends PhisicalObject 
{
    public $model;
    public $color;
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }
    public function getDrive();
    public function getWash();
    public function getFuel();    
}
$toyota = new Car('Corolla', 'red');
$honda = new Car('Civic', 'green');

class Tv extends PhisicalObject
{
    public $model;
    public $size;
    public function __construct($model, $size)
    {
        $this->model = $model;
        $this->size = $size;
    }
    public function standby();
    public function changeChannel($channel)
    {
    	$this->channel = $channel;
    }
    public function setTimer($timer)
    {
    	$this->timer = $timer;
    }    
}
$LG = new Tv ('Flatrone', '43"');
$Sony = new Tv ('KDL-32', '32"');

class Pen extends PhisicalObject
{
    public $ink_color;
    public $material;
    public $brand;
    public function __construct($brand, $ink_color, $material)
    {
        $this->brand = $brand;
        $this->ink_color = $ink_color;
        $this->material = $material;     
    } 
    public function getWrite();
    public function changeColor($ink_color)
    {
    	$this->ink_color = $ink_color;
    }
}
$bic_pen = new Pen ('BIC', 'red', 'plastic');
$parker_pen = new Pen ('Parker', 'blue', 'metal');

class Duck extends PhisicalObject
{
    public $name;
    public $sex;
    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
    public function Swiming();
    public function Fishing();    
}
$duck1 = new Duck('Donald', 'he is');
$duck2 = new Duck('Duffy', 'she is');

class Product extends PhisicalObject
{
	public $name;
    public $category;
    public $price;
    public $discount;
    public function totalPrice($price, $discount)
    {
        $total_price = $price - (($price/100)*$discount);
    }
    public function __construct($name, $category, $price, $discount)
    {
        $this->category = $category;
        $this->price = $price;
        $this->discount = $discount;
    }  
}
$apple = new Product('apple', 'wegetables', 20, 5);
$caviar = new Product('caviar', 'seafood', 50, 0);










