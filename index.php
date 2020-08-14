<?php

include_once 'Circle.php';
include_once 'Cylinder.php';

$circle = new Circle(10,'blue');
echo $circle . ' co chu vi la: ' . $circle->calPerimeter() . ' , dien tich la: ' . $circle->calArea();
echo '<br>';

$cylinder = new Cylinder(10,5,'pink');
echo $cylinder . ' co dien tich la: ' . $cylinder->calArea() . ' , co the tich la: ' . $cylinder->calVolume();
