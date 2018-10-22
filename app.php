<?php
class container
{
    
    const hot=100;
    const cold=10;
    function __construct()
    {
        $container_depth=100;
        addWater();
    }
    
    function addWater()
    {
       //add water to containe;
       container_depth=container_depth-water;
        checkTemprature();
        //check temprature will take two arguments
        1.temprature
        2.container_depth
    }
    
    function checkDepth()
    {
        if(depth==max)
            exit;
        else
            call addWater;
    }
    
    function checkTemprature()
    {
        if(temprature==too_hot)
            add cold water;
        call checkdepth
        else add hot water;
        call checkdepth
        
    }
    
    
    
}