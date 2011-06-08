<?php

// here is a list of upcoming events, each time shuffled up a bit
$times = array( 1307463300, 1307467800, 1307474100, 1307480400);
$events[] = array(  "date" => 1307463300,
                    "address" => "2805 E Porter Ave, Des Moines IA",
                    "note" => "",
                    "completed" => false,
                    "id" => 1);

$events[] = array(  "date" => 1307467800,
                    "address" => "802 E County Line Rd, Des Moines IA",
                    "note" => "Liked the fireplace, did not like the small kitchen, did not like the ...",
                    "completed" => true,
                    "id" => 2);

$events[] = array(  "date" => 1307474100,
                    "address" => "4902 University Ave, Des Moines IA",
                    "note" => "",
                    "completed" => false,
                    "id" => 3);

$events[] = array(  "date" => 1307480400,
                    "address" => "4200 E 25th Street, Des Moines IA",
                    "note" => "",
                    "completed" => false,
                    "id" => 4);

shuffle($events);

for($i = 0; $i < count($events); $i++) {
    $events[$i]['date'] = $times[$i];
}

header("Content-type: application/json");
echo json_encode($events);
