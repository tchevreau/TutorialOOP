<?php

namespace Tessi\DrawLib;

use Tessi\Geometry\Geometry;

class Rectangle extends Quadrilateral 
{
    /**
     * constructor
     * 
     * @param Coordinate $a
     * @param Coordinate $b
     * @param Coordinate $c
     * @param Coordinate $d
     * @param string $color
     */
    public function __construct(Coordinate $a, Coordinate $b, Coordinate $c, Coordinate $d, $color = '#000000')
    {
        parent::__construct($a, $b, $c, $d, $color);
    }


    /**
     * valid is shape is a rectangle
     *    
     * @return boolean
     */
    public function isValid()
    {   
        var_dump($this->a);
        var_dump($this->b);
        var_dump($this->c);
        var_dump($this->d);

        var_dump(Geometry::getAngle($this->b, $this->a, $this->c));
        var_dump(Geometry::getAngle($this->c, $this->d, $this->b));
        var_dump(Geometry::getAngle($this->d, $this->a, $this->c));

        if (90 == Geometry::getAngle($this->b, $this->a, $this->c) and
            90 == Geometry::getAngle($this->c, $this->d, $this->b) and
            90 == Geometry::getAngle($this->d, $this->a, $this->c) ) 
        {
            return true;
        } 

        return false;
    }

    /**
     * Get the area of the shape
     *    
     * @return double
     */
    public function getArea()
    {
        return Geometry::getDistance($this->a, $this->b) * Geometry::getDistance($this->b, $this->c);
    }

    /**
     * Get the color of the circle
     *    
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

}
