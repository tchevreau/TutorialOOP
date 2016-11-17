<?php

namespace Tessi\DrawLib;

abstract class Shape implements ShapeInterface
{
    /**
     * color
     * 
     * @var string
     */
    protected $color;

    /**
     * constructor
     * 
     * @param string $color
     */
    public function __construct($color = '#000000')
    {
        $this->color = $color;
    }

    /**
     * Get the area of the shape
     *    
     * @return double
     */
    abstract public function getArea();    
}

