<?php

class Fake
{

    function putContact(): string
    {
        $faker = Faker\Factory::create();
//        for ($i = 0; $i < $counter; $i++) {
//        $priorityList = ['low', 'normal', 'high', 'urgent'];
//        $randObjPriority = array_rand($priorityList);
//        $priority = $priorityList[$randObjPriority];
//
//        $statusList = ['open', 'pending', 'solved'];
//        $randObjStatus = array_rand($statusList);
//        $status = $statusList[$randObjStatus];
        $name = $faker->name;
        $email = $faker->email;
        $phone = $faker->phoneNumber;
        $description = $faker->realText();
        $descriptionFix = str_replace('&#8217;', "'", $description);


        return '{
"name": "' . $name . '",
"email": "' . $email . '",
"phone": "' . $phone . '",
"company_id": 103000954157,
"description": "' . $descriptionFix . '"
}';
    }

    public function putTickets(): string
    {
        $faker = Faker\Factory::create();
        $subject = $faker->words(5, true);
        $description = $faker->realText();
        $descriptionFix = str_replace('&#8217;', "'", $description);

        $typeList = ['Question', 'Incident', 'Problem', 'Feature Request', 'Refund'];
        $randObjType = array_rand($typeList);
        $type = $typeList[$randObjType];

        $contactIDList = [
            103071146874,
            103071146950,
            103069373044,
            103071146909,
            103069373050,
            103069373037,
            103069373049,
            103069373051,
            103069373038,
            103069373042,
            103069373046,
            103069373047,
            103071146936,
            103071144658,
            103069373048,
            103069373052,
            103069373040,
            103071147231,
            103071147327,
            103071146885,
            103071146960,
            103069373045,
            103071146863,
            103071146970,
            103071146897,
            103071146922,
            103069373043,
            103069373041,
            103071146458,
            103071147243
        ];
        $randContactList = array_rand($contactIDList);
        $contactID = $contactIDList[$randContactList];

        $agentList = [
            103069373036,
            103071176755
        ];
        $randAgentList = array_rand($agentList);
        $agentID = $agentList[$randAgentList];

        $companiesList = [103000959648, 103000954157];
        $randCompaniesList = array_rand($companiesList);
        $companyID = $companiesList[$randCompaniesList];

        $priority = rand(1, 4);
        $status = rand(2, 7);
        return '{
"subject": "' . $subject . '",
"type": "' . $type . '",
"description": "' . $descriptionFix . '",
"status": ' . $status . ',
"priority": ' . $priority . ',
"company_id": 103000954157,
"requester_id": ' . $contactID . ',
"responder_id": ' . $agentID . '
}';
    }
}