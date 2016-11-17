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

// start your code here

$coordinate1 = new Coordinate(10, 10);
$coordinate2 = new Coordinate(10, 12);

echo Geometry::getDistance($coordinate1, $coordinate2);

$circle = new Circle($coordinate1, 2);
echo $circle->getColor();
