<?php

namespace App\controller;






class InsertHour{


public function __construct()
{
    if(isset($_POST['data']) && isset($_POST['hora'])){
        
        date_default_timezone_set("Brazil/East");
        $dateToday = date('d/m/Y');
        $hourNew = date('H:i:s');
        $connect = new \App\model\Connection();
        $connect->SetInsertHour($dateToday, $hourNew);

        header('Location: index.php');
        



    }
    else {
        header('Location: index.php');
    }
}



}




