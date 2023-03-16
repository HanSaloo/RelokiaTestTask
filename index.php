<?php

require 'vendor/autoload.php';
require_once "Connect.php";
require_once "Fake.php";
require_once "FileWriter.php";

$fake = new Fake();
$connect = new Connect();
$file = new FileWriter();

//$file->Write();


for ($i = 0;$i<1; $i++) {
    var_dump($fake->putTickets());
//    $connect->resp('tickets', $fake->putTickets());
//    sleep(2);
}
//$reqest = $connect->req('tickets');
//var_dump($reqest[2]);
//var_dump($fake->PutTicket());
