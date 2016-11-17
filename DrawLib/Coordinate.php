<?php

namespace Tessi\DrawLib;

use Tessi\Geometry\CoordinateInterface;

class Coordinate implements CoordinateInterface 
{
    /**
     * Coordinate x
     *
     * @var int
     */
    private $x;

    /**
     * Coordinate y
     *
     * @var int
     */
    private $y;

    /**
     * Constructor
     *
     * @param int $x
     * @param int $y
     */
    public function __construct($x,  $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get X coordinate
     *
     * @return int $x
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Get Y coordinate
     *
     * @return int $y
     */
    public function getY()
    {
        return $this->y;
    }

}
