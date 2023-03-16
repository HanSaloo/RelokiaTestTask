<?php

class Fake
{
    function PutTicket(): string
    {
        $faker = Faker\Factory::create();
//        for ($i = 0; $i < $counter; $i++) {
            $priorityList = ['low', 'normal', 'high', 'urgent'];
            shuffle($priorityList);
            $randObjPriority = array_rand($priorityList);
            $priority = $priorityList[$randObjPriority];

        $statusList = ['open', 'pending', 'solved'];
        shuffle($statusList);
        $randObjStatus = array_rand($statusList);
        $status = $statusList[$randObjStatus];

            $subject = $faker->realText(30);
            $body = $faker->realText(300);
            $postArrJson = '{
                  "ticket": {
                     "comment": {
                     "body": "'.$body.'"
                  },
            "priority": "'.$priority.'",
            "subject": "'.$subject.'",
            "type": "problem",
            "status": "'.$status.'",
            "requester_id": 9862423018909,
            "submitter_id": 9862423018909,
            "assignee_id": 9862423018909,
            "organization_id": 9862447743261,
            "group_id": 9862463583005
  } }';
            return $postArrJson;
        }
//    }
}