<?php

class Car {

    // property
    public $brand;
    public $color;

    //method
    function getBrand() {
        return $this->brand;
    }
    
}


//object
$rubicon = new Car();
$tesla = new Car();

//setter
$rubicon->brand = "Rubicon";
$rubicon->tesla = "Rubicon";

//echo
echo $rubicon->brand = "Rubicon";
echo '<br><br>';
echo $tesla->brand = "Tesla";

    
?>