<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class Connect
{


    public function req(string $entity)
    {

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic TG1QYWx1YWE3NWRiWmR0Qm4xcks6WA==',
            'Cookie' => '_x_m=x_c; _x_w=7_1'
        ];
        $request = new Request('GET', 'https://testcomp5948.freshdesk.com/api/v2/' . $entity . '?include=description', $headers);
        $res = $client->sendAsync($request)->wait();
        return json_decode($res->getBody(), true);
    }

    public function reqID($id, string $entity){

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic TG1QYWx1YWE3NWRiWmR0Qm4xcks6WA==',
            'Cookie' => '_x_m=x_c; _x_w=7_1'
        ];
        $request = new Request('GET', 'https://testcomp5948.freshdesk.com/api/v2/'.$entity.'/'.$id, $headers);
        $res = $client->sendAsync($request)->wait();
        return json_decode($res->getBody(), true);
    }

    public function resp(string $entity,  string $body)
    {
        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic TG1QYWx1YWE3NWRiWmR0Qm4xcks6WA==',
            'Cookie' => '_x_m=x_c; _x_w=7_1'
        ];
        $request = new Request('POST', 'https://testcomp5948.freshdesk.com/api/v2/'.$entity, $headers, $body);
        $res = $client->sendAsync($request)->wait();
        print_r($res->getBody());
//        echo "\n";
    }
}
