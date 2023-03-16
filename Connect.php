<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class Connect{

    /**
     * @param string $entity
     * @return void
     */
    public function req(string $entity){

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ZGlkcGFkcmVAZ21haWwuY29tL3Rva2VuOkVkeWVCTFZJYUVxcVV1RWd4bEVPNjgzWFdKOGNJZHNSZU9VbXFOaDE=',
            'Cookie' => '__cfruid=142716aa7d5e81c11d884721aca249388cc9ec35-1678956086; _zendesk_cookie=BAhJIhl7ImRldmljZV90b2tlbnMiOnt9fQY6BkVU--459ed01949a36415c1716b5711271c3d08918307; _zendesk_session=Wm1zUTBqOG93Q29PYktORHBDd0hhY3ZWWEJraS9PSVp4QmJrVXJwenA3ZU9WeU5tcmRWRUpERVlXNjhuTUNXVXRZeE93K2pYNmVLbC82SExoUm02U2FxYmVsZTNqUFRiQlFZclYyekhnbDBIY09TQWxzOTN5dVlnQ25NNlFsaC8tLVAwT3E2NVE1U0NPK0xaYWQrTTF5c2c9PQ%3D%3D--a8f562ed41762422a466cd8a94df8003ff51e605'
        ];
        $request = new Request('GET', 'https://bar6448.zendesk.com/api/v2/'.$entity.'.json', $headers);
        $res = $client->sendAsync($request)->wait();
        return json_decode($res->getBody(), true)[$entity];
    }

    public function resp(/*string $entity, */string $body){

        $client = new Client();
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Basic ZGlkcGFkcmVAZ21haWwuY29tL3Rva2VuOkVkeWVCTFZJYUVxcVV1RWd4bEVPNjgzWFdKOGNJZHNSZU9VbXFOaDE=',
            'Cookie' => '__cfruid=142716aa7d5e81c11d884721aca249388cc9ec35-1678956086; _zendesk_cookie=BAhJIhl7ImRldmljZV90b2tlbnMiOnt9fQY6BkVU--459ed01949a36415c1716b5711271c3d08918307; _zendesk_session=Wm1zUTBqOG93Q29PYktORHBDd0hhY3ZWWEJraS9PSVp4QmJrVXJwenA3ZU9WeU5tcmRWRUpERVlXNjhuTUNXVXRZeE93K2pYNmVLbC82SExoUm02U2FxYmVsZTNqUFRiQlFZclYyekhnbDBIY09TQWxzOTN5dVlnQ25NNlFsaC8tLVAwT3E2NVE1U0NPK0xaYWQrTTF5c2c9PQ%3D%3D--a8f562ed41762422a466cd8a94df8003ff51e605'
        ];
//        $body = '{
//  "user": {
//    "email": "dawd@example.org",
//    "identities": [
//      {
//        "type": "email",
//        "value": "234234234@user.com"
//      },
//      {
//        "type": "twitter",
//        "value": "awdawd2"
//      }
//    ],
//    "name": "Marco Polo",
//    "role": "agent",
//    "organization_id": "9862447743261"
//  }
//}';
        $request = new Request('POST', 'https://bar6448.zendesk.com/api/v2/tickets', $headers, $body);
        $res = $client->sendAsync($request)->wait();
        echo $res->getBody();
    }
}
