<?php
//configurando Time Zone do servidor
date_default_timezone_set("Brazil/East");
//Autoload
include_once 'vendor/autoload.php';

$startConnection = new \App\model\Connection();
$consultRegistersDay =$startConnection->SetConsult(date('d/m/Y'));
$startConnection->consultQuantRegistersDay(date('d/m/Y'));
include_once 'app/view/templete.php';







?>





