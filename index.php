<?php

require 'vendor/autoload.php';
require_once "Connect.php";
require_once "Fake.php";

//
//$file = fopen('tickets.csv', 'w+');
//
////header
//fputcsv($file, [
//    'Ticket ID',
//    'Description',
//    'Status',
//    'Priority',
//    'Agent ID',
//    'Agent Name',
//    'Agent Email',
//    'Contact ID',
//    'Contact Name',
//    'Contact Email',
//    'Group ID',
//    'Group Name',
//    'Company ID',
//    'Company Name',
//    'Comments'
//]);
//
//$connect = new Connect();
//$tickets = $connect->req("GET", 'tickets');
//
//foreach ($tickets as $ticket) {
//    $finalArr = array(
//        $ticket['id'],
//        $ticket['description'],
//        $ticket['status'],
//        $ticket['priority'],
//        $ticket['assignee_id'],
//        $ticket['recipient'], //change
//        $ticket['recipient'],//change
//        $ticket['requester_id'],
//        $ticket['recipient'], //change
//        $ticket['recipient'],//change
//        $ticket['group_id'],
//        $ticket['organization_id'],
//        $ticket['recipient'],//change
//        $ticket['recipient'] //change
//
//    );
//    fputcsv($file, $finalArr);
//}
//
//fclose($file);


$fake = new Fake();
$resp= new Connect();
//for ($i = 0;$i<50; $i++)
$resp->resp($fake->PutTicket());
//var_dump($fake->PutTicket());
