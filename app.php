<?php
class water
{
    const COLD=0;
    const  HOT=1;
    const DEEP_DEPTH=100;
    var $isFull = false;
    var $current_depth=0;
    var $current_temp =self::COLD;
    function __construct(){
        $this->addWater(self::HOT);
        $this->FillVessal();
    }
    function checkDepth(){
        //will tell us the actual depth
        return $this->current_depth;
    }
    function checkTempatarue() {
        return $this->current_temp ;
    }
    function addWater($param) {
        //depending upon params a five unit of hot or cold water is added
        if($param == self::HOT){
        //add 5 unit of hot water
            $this->current_temp=self::HOT;
        }else {
            //add 5 unit of cold water
            $this->current_temp=self::COLD;
        }
        $this->current_depth+=5;
        echo " curent temp  $this->current_temp  current depth $this->current_depth \n";
    }
    function FillVessal(){
        while($this->checkDepth()!= self::DEEP_DEPTH && !$this->isFull){
            $this->addWater($this->checkTempatarue()==self::HOT?self::COLD:self::HOT);
        }
    }
}

$app = new water();
//$app->FillVessal();
?>

