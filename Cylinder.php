<?php

include_once 'Circle.php';

class Cylinder extends Circle
{
    private $height;

    public function __construct($radius, $height, $color)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function calArea()
    {
        return parent::calArea() * 2 + parent::calPerimeter() * $this->getHeight();
    }

    public function calVolume()
    {
        return parent::calArea() * $this->getHeight();
    }

    public function __toString(){
        return 'Ban kinh la: ' . $this->getRadius() . ' , chieu cao la: ' . $this->getHeight() . ' , mau sac la: ' . $this->getColor();
    }
}
