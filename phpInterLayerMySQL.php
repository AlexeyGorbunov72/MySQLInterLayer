<?php
class InfoAnswer{
    public $rooms = -1;
    public $price = -1;
    public $type = "";

}
    $myObj = new InfoAnswer;
    $myObj->rooms = 1;
    $myObj->price = 140;
    $myObj->type = "midlePrice";
    $myJSON = json_encode($myObj);

    echo $myJSON;

?>
