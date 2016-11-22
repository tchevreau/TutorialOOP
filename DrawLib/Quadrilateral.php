<?php

namespace Tessi\DrawLib;

use Tessi\Geometry\Geometry;
 class Quadrilateral extends Shape
{
    /**
     * a coordinate
     *
     * @var Coordinate
     * 
     */
    protected $a;
 
    /**
     * b coordinate
     *
     * @var Coordinate
     * 
     */
    protected $b;
 
    /**
     * c coordinate
     *
     * @var Coordinate
     * 
     */
    protected $c;
 
    /**
     * d coordinate
     *
     * @var Coordinate
     * 
     */
    protected $d;

    /**
     * constructor
     *
     * @param Coordinate $a
     * @param Coordinate $b
     * @param Coordinate $c
     * @param Coordinate $d
     * @param string $color
     */
    public function __construct(Coordinate $a, Coordinate $b, Coordinate $c, Coordinate $d, $color)
    {
        parent::__construct($color);
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $this->d = $d;
    }
    /**
     * Get the area of the shape
     *    
     * @return double
     */
    public function getArea()
    {
        echo 'toto1';
    }
 
    /**
     * valid is shape is a rectangle
     *    
     * @return boolean
     */
    public function isValid()
    {
        //$find = array( 0 => 3, 1 => 4);    
        $tabX = array();
        $tabX[$this->a->getX()] = 0;
        $tabX[$this->b->getX()] = 0;
        $tabX[$this->c->getX()] = 0;
        $tabX[$this->d->getX()] = 0;
        $tabX[$this->a->getX()] = $tabX[$this->a->getX()] + 1;
        $tabX[$this->b->getX()] = $tabX[$this->b->getX()] + 1;
        $tabX[$this->c->getX()] = $tabX[$this->c->getX()] + 1;
        $tabX[$this->d->getX()] = $tabX[$this->d->getX()] + 1;
        $tabY = array();
        $tabY[$this->a->getY()] = 0;
        $tabY[$this->b->getY()] = 0;
        $tabY[$this->c->getY()] = 0;
        $tabY[$this->d->getY()] = 0;
        $tabY[$this->a->getY()] = $tabY[$this->a->getY()] + 1;
        $tabY[$this->b->getY()] = $tabY[$this->b->getY()] + 1;
        $tabY[$this->c->getY()] = $tabY[$this->c->getY()] + 1;
        $tabY[$this->d->getY()] = $tabY[$this->d->getY()] + 1;

        //if (in_array($find, $tabX, true) ) 
        if (in_array(3, $tabX) || in_array(4, $tabX) || in_array(3, $tabY) || in_array(4, $tabY) ) 
        {
            return false;
        } 

        return true;
    }

    /**
     * Get the color of the circle
     *    
     * @return string
     */
    public function getColor()
    {
        echo 'toto2';
    }

}