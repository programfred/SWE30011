<?php

namespace App\Models;
use Session;

/**
 * Author : Fred(Yangfan Zhou)
 * */
class Bike
{

    const direction = array("NORTH",  "EAST", "SOUTH", "WEST");


    private function setXY($x, $y)
    {
        if (!is_null($x)) {
            Session::put('x', $x);
        }

        if ( !is_null($y)) {
            Session::put('y', $y);
        }
     
    }
    public function getXY()
    {
        return array(
            "x" => Session::get("x"),
            "y" => Session::get("y")

        );
    }

    public function getFacing()
    {
        return Session::get("facing");
    }
    private function setFacing($facing)
    {
        Session::put("facing", $facing);
    }
    public function place($x, $y, $facingDirection)
    {

        //if excess grid edge
        if ($x < 0 || $x > 6 || $y < 0 || $y > 6) {
            //throw exception
        }
        //if incorrect arguments
        if (!in_array($facingDirection, self::direction)) {
            //throe exception
        }

        $this->setXY($x, $y);
        $this->setFacing($facingDirection);
    }

    public function turnLeft()
    {
        $factingIndex = array_search($this->getFacing(), self::direction);
        if ($factingIndex > 0) {
            $this->setFacing(self::direction[$factingIndex - 1]);
        } else {
            $this->setFacing(self::direction[count(self::direction) - 1]);
        }
    }

    public function turnRight()
    {

        $factingIndex = array_search($this->getFacing(), self::direction);

        if ($factingIndex >= (count(self::direction) - 1)) {
            $this->setFacing(self::direction[0]);
        } else {
            $this->setFacing(self::direction[$factingIndex + 1]);
        }
    }


    private function validateLocation($x, $y)
    {
        if ($x < 0 || $x > 6 || $y < 0 || $y > 6) {
            return false;
        }
        return  true;;
    }
    public function forward()
    {
        //check if in arrauy
        $sessLocation = $this->getXY();
        $lx = $sessLocation["x"];
        $ly = $sessLocation["y"];
        switch ($this->getFacing()) {
            case "NORTH":
                if ($this->validateLocation(0, $ly+1)){
                    $this->setXY(null, $ly+1);
                }
                    
                break;
            case "EAST":
                if ($this->validateLocation($lx+1, 0) == true) {
                    $this->setXY($lx+1, null);
                }
                break;
            case "SOUTH":
                if ($this->validateLocation(0, $ly-1)==true){
                    $this->setXY(null, $ly-1);
                }
                  
                break;
            case "WEST":
                if ($this->validateLocation($lx-1, 0) == true){
                    $this->setXY($lx-1, null);
                }
                    
                break;
            default:
                //throw
                break;
        }
    }

    public function gpsReport()
    {
        $sessLocation = $this->getXY();

        $facing = $this->getFacing();
        $result = "(" .  $sessLocation["x"] . "," . $sessLocation["y"]  . ")," . $facing;
        return $result;
    }
}
