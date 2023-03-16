<?php

class Fake
{
    function PutContact()
    {
        $faker = Faker\Factory::create();
//        for ($i = 0; $i < $counter; $i++) {
//        $priorityList = ['low', 'normal', 'high', 'urgent'];
//        shuffle($priorityList);
//        $randObjPriority = array_rand($priorityList);
//        $priority = $priorityList[$randObjPriority];
//
//        $statusList = ['open', 'pending', 'solved'];
//        shuffle($statusList);
//        $randObjStatus = array_rand($statusList);
//        $status = $statusList[$randObjStatus];

        $name = $faker->name;
        $email = $faker->email;
        $phone = $faker->phoneNumber;
//        $subject = $faker->realText(30);
        $description = $faker->realText();

        $postArrJson =
            '{
    "name": "'.$name.'",
    "email": "'.$email.'",
    "phone": "'.$phone.'",
    "company_id": 103000954157,
    "description": "'.$description.'"
}';
        return $postArrJson;
    }
//    }


}