<?php

// calculate the area and perimeter of a circle.
echo "<strong>Taks - 01 </strong>" . "<br>";
// base class 
class Shape
{
    public function getArea()
    {
        return 0;
    }
}

// circle class inherite form shape class 
class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    // override getCircleArea 
    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}

// call class and circle area output 
$circle = new Circle(2);
echo "Area of the circle:" . $circle->getArea() . "<br>";


// calculate the area and perimeter of a rectangle.
class Rectangle extends Shape
{
    private $width;
    private $height;

    // constructor to init width and height
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    // overrite the getArea to calculate rectangle
    public function getArea()
    {
        return $this->width * $this->height;
    }
}

// call class and rectangle area output 
$rectangle = new Rectangle(4, 8);
echo "Area of the Rectangle :" . $rectangle->getArea() . "<br>";


