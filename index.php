<?php

require 'vendor/autoload.php';
require_once "Connect.php";
require_once "Fake.php";

$fake = new Fake();
$connect = new Connect();



$file = fopen('tickets.csv', 'w+');

//header
fputcsv($file, [
    'Ticket ID',
    'Description',
    'Status',
    'Priority',
    'Agent ID',
    'Agent Name',
    'Agent Email',
    'Contact ID',
    'Contact Name',
    'Contact Email',
    'Group ID',
    'Group Name',
    'Company ID',
    'Company Name',
    'Comments'
]);

$connect = new Connect();
$tickets = $connect->req('tickets');

//var_dump($tickets[0]['id']);
//foreach ($tickets as $ticket) {

$ticketsCount = count($tickets);
//var_dump($ticketsCount);
for ($i = 0;$i<$ticketsCount; $i++){

    $finalArr = array(
        $tickets[$i]['id'], //id
        $tickets[$i]['description_text'], //Description
        $tickets[$i]['status'], //Status
        $tickets[$i]['priority'], //Priority
        $tickets[$i]['nr_due_by'], //Agent ID  change later
        $tickets[$i]['nr_due_by'], //Agent Name change later
        $tickets[$i]['nr_due_by'],//Agent Email change later
        $tickets[$i]['requester_id'], //Contact ID
        $tickets[$i]['nr_due_by'], //Contact Name change
        $tickets[$i]['nr_due_by'],//Contact Email change
        $tickets[$i]['group_id'], //Group ID
        $tickets[$i]['nr_due_by'], //Group Name
        $tickets[$i]['nr_due_by'],//Company ID change
        $tickets[$i]['nr_due_by'], //Company Name change
        $tickets[$i]['nr_due_by'] //Comments

    );
    fputcsv($file, $finalArr);
}

fclose($file);



//for ($i = 0;$i<3; $i++) {
    $connect->resp($fake->PutContact());
//    sleep(2);
//}
//$reqest = $connect->req('tickets');
//var_dump($reqest[2]);
//var_dump($fake->PutTicket());
