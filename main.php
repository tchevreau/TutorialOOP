<?php

/**
 * Load php classes based on the namespaces
 */
spl_autoload_register(function($class) {
    // split the namespace into parts
    $parts = explode('\\', $class);
    // Remove Tessi from the namespace parts
    array_shift($parts);

    // require files in directories according to the last parts of the splitted namespace
    require sprintf('%s.php', implode('/', $parts));
});

use Tessi\DrawLib\Coordinate;
use Tessi\Geometry\Geometry;
use Tessi\DrawLib\Circle;
use Tessi\DrawLib\Quadrilateral;
use Tessi\DrawLib\Rectangle;

// start your code here

$coordinate1 = new Coordinate(1, 1);
$coordinate2 = new Coordinate(1, 3);
$coordinate3 = new Coordinate(3, 3);
$coordinate4 = new Coordinate(3, 1);

//echo Geometry::getDistance($coordinate1, $coordinate2);
/*
$circle = new Circle($coordinate1, 2);
echo $circle->getColor();
echo $circle->getArea($coordinate1,4);
//$quad = new Quadrilateral($coordinate1, $coordinate2, $coordinate3, $coordinate4);
*/

$rectangle = new Rectangle($coordinate1, $coordinate2, $coordinate3, $coordinate4);

echo $rectangle->getColor();
if ($rectangle->isValid()) {
    echo $rectangle->getArea();
} else {
    echo 'ceci n\'est pas un rectangle';
}

