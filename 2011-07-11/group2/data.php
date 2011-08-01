<?php

// here is a list of upcoming events, each time shuffled up a bit
$times = array( 1307463300, 1307467800, 1307474100, 1307480400);
$events[] = array(  "date" => 1307463300,
                    "address" => "2805 E Porter Ave, Des Moines IA",
                    "note" => "",
                    "completed" => false,
'lat'=>'41.53446730',
'lng'=>'-93.5617130999999',
                    "id" => 1);

$events[] = array(  "date" => 1307467800,
                    "address" => "802 E County Line Rd, Des Moines IA",
                    "note" => "Liked the fireplace, did not like the small kitchen, did not like the ...",
                    "completed" => true,
'lat'=>'41.514010',
'lng'=>'-93.6015190',
                    "id" => 2);

$events[] = array(  "date" => 1307474100,
                    "address" => "4902 University Ave, Des Moines IA",
                    "note" => "",
                    "completed" => false,
'lat'=>'41.60035680',
'lng'=>'-93.6839902999999',
                    "id" => 3);

$events[] = array(  "date" => 1307480400,
                    "address" => "4200 E 25th Street, Des Moines IA",
                    "note" => "",
                    "completed" => false,
'lat'=>'41.54630490',
'lng'=>'-93.651271000000000',
                    "id" => 4);

shuffle($events);


for($i = 0; $i < count($events); $i++) {
    $events[$i]['date'] = $times[$i];
}

/*foreach($events as &$listing) {
	$url = "http://maps.googleapis.com/maps/api/geocode/json?address=". urlencode($listing['address']) ."&sensor=false";
	echo $url."<br>";
	//$f = fopen($url,'r');
	$data = file_get_contents($url);
	$data2 = json_decode($data,true);
var_dump($data2->{results}[0]);
	$lat = $data2->{results}[0]->{geometry}->{location}->{lat};
	$lng = $data2->{results}[0]->{geometry}->{location}->{lng};

	$listing['lat'] = $lat;
	$listing['lng'] = $lng;

	var_dump($lat, $lng);
}*/

$enc_events = json_encode($events);
if($_GET['callback']) {
	header("Content-type: text/javascript");
	echo $_GET['callback'].'(' . $enc_events . ')';
} else {
	header("Content-type: application/json");
	echo $enc_events;
}