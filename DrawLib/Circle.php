<?php

namespace Tessi\DrawLib;

class Circle extends Shape 
{
    const PI = 3.141592; 

    /**
     * center of circle
     * 
     * @var Coordinate
     */
    private $center;

    /**
     * radius
     * 
     * @var double
     */
    private $radius;

    /**
     * constructor
     * 
     * @param Coordinate $center
     * @param double $radius
     * @param string $color
     */
    public function __construct(Coordinate $center, $radius, $color = '#000000')
    {
        parent::__construct($color);
        $this->center = $center;
        $this->radius = $radius;
    }

    /**
     * Get the area of the shape
     *    
     * @return double
     */
    public function getArea()
    {
        return self::PI * pow($this->radius, 2);
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

    /**
     * valid is shape is a rectangle
     *    
     * @return boolean
     */
    public function isValid() 
    {
        echo 'toto';
    }
        
}
