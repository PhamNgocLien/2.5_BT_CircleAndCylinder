<?php


class Circle
{
    protected $radius;
    protected $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function calPerimeter()
    {
        return pi() * $this->getRadius() * 2;
    }

    public function calArea()
    {
        return pi() * pow($this->getRadius(), 2);
    }

    public function __toString(){
        return 'Ban kinh la: ' . $this->getRadius() . ' , mau la: ' . $this->getColor();
    }
}