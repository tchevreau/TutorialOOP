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
    public function __construct($color)
    {
        $this->color = $color;
    }

    /**
     * Get the area of the shape
     *    
     * @return double
     */
    abstract public function getArea();    

    /**
     * Valids if shape is correct
     *    
     * @return boolean
     */
    abstract public function isValid();        
}

