<?php

namespace Tessi\Geometry;

abstract class Geometry
{
    /**
     * Get distance between 2 CoordinateInterface
     *
     * @param CoordinateInterface $c1
     * @param CoordinateInterface $c2
     *
     * @return double
     */
    public static function getDistance(CoordinateInterface $c1, CoordinateInterface $c2)
    {
        return sqrt(
            pow(($c2->getX() - $c1->getX()), 2)
            +
            pow(($c2->getY() - $c1->getY()), 2)
        );
    }

    /**
     * Calculate the inner radius from 3 CoordinateInterface
     *
     * @param CoordinateInterface $c1 : the center CoordinateInterface
     * @param CoordinateInterface $c2
     * @param CoordinateInterface $c3
     * @return float
     */
    public static function getAngle(CoordinateInterface $c1, CoordinateInterface $c2, CoordinateInterface $c3)
    {
        $c12Distance = self::getDistance($c1, $c2);
        $c13Distance = self::getDistance($c1, $c3);
        $c23Distance = self::getDistance($c2, $c3);
        $rad = acos(
            (
                pow($c12Distance, 2) +
                pow($c13Distance, 2) -
                pow($c23Distance, 2)
            )
            /
            (
                2 *
                $c12Distance *
                $c13Distance
            )
        );

        return rad2deg($rad);
    }
}

?>