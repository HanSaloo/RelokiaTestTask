<?php
require 'vendor/autoload.php';
require_once "Connect.php";

class FileWriter
{

    function Write()
    {
        $file = fopen('tickets.csv', 'w+');

//header for file
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

        $ticketsCount = count($tickets);
        for ($i = 0; $i < $ticketsCount; $i++) {
            $specificContactData = $connect->reqID($tickets[$i]['requester_id'], 'contacts');
            $specificAgentData = $connect->reqID($tickets[$i]['responder_id'], 'agents');
            $specificGroupData = $connect->reqID($tickets[$i]['group_id'], 'groups');
            $specificCompanyData = $connect->reqID($tickets[$i]['company_id'], 'companies');
//            var_dump($specificAgentData['contact']['name']);

            $finalArr = array(
                $tickets[$i]['id'], //id
                $tickets[$i]['description_text'], //Description
                $tickets[$i]['status'], //Status
                $tickets[$i]['priority'], //Priority
                $tickets[$i]['responder_id'], //Agent ID
                $specificAgentData['contact']['name'], //Agent Name
                $specificAgentData['contact']['email'],//Agent Email
                $tickets[$i]['requester_id'], //Contact ID
                $specificContactData['name'], //Contact Name
                $specificContactData['email'], //Contact Email
                $tickets[$i]['group_id'], //Group ID
                $specificGroupData['name'], //Group Name
                $tickets[$i]['company_id'],//Company ID
                $specificCompanyData['name'], //Company Name
                $specificCompanyData['description'] //Comments

            );
            fputcsv($file, $finalArr);
        }

        fclose($file);


    }


}
