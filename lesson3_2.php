<?php
interface Weight
{
    public function setWeight($weight);
}
interface Model
{
	public function setModel($model);
}
class PhisicalObject implements Weight
{
    public $weight;
    public function setWeight($weight)
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
    public function getDrive(){
    	echo "я еду!";
    }
    public function getWash(){
    	echo "я моюсь!";
    }
    public function getFuel(){
    	echo "я на заправке!";
    }   
}


/* вот тут что-то не так. не понял, как имплементировать интерфейс к наследующему классу.
class Car implements Model
{
	public function setModel($model){
		echo "я - $model";
	}
} */
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
    public function standby(){
    	echo "on/of!";
    }
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
    public function getWrite(){
    	echo "я пишу! чернила - $this->ink_color.";
    }
    public function changeColor($ink_color)
    {
    	$this->ink_color = $ink_color;
    }
}
$bic = new Pen ('BIC', 'red', 'plastic');
$parker = new Pen ('Parker', 'blue', 'metal');
$bic->getWrite();
class Duck extends PhisicalObject
{
    public $name;
    public $sex;
    public function __construct($name, $sex)
    {
        $this->name = $name;
        $this->sex = $sex;
    }
    public function swimming(){
    	echo "плавание!";
    }
    public function fishihg(){
    	echo "рыбалка!";
    }    
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










