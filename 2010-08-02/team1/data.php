<?php
$title = "Dan Wardell's Reading Road Trip 2010";
$nonmobile = "http://blogs.iptv.org/blogs/dantastic/dans-reading-road-trip-map/";
$stuff ="Reading Road Trip 2010";
$current_page = $_GET['p'];
if (!$current_page) $current_page = 1;
$per_page = 10;

$all_data = array(

  array( 'where' =>   'Council Bluffs Public Library',
    'date' => 'Monday, June 7',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9 a.m. and lasts 40 minutes. Encore presentation at 10 a.m. Free admission. Open to the public.",
    'addr' => '400 Willow Avenue, Council Bluffs, IA'),

  array(
    'where' =>   'Hamburg Public Library',
    'date' => 'Tuesday, June 8',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '1301 Main Street, Hamburg, IA'),

  array( 'where' =>   'Essex Lied Public Library',
    'date' => 'Tuesday, June 8',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '508 Iowa Avenue, Essex, IA'),

  array( 'where' =>   'Lenox City Public Library',
    'date' => 'Wednesday, June 9',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '101 North Main, Lenox City, IA'),

  array( 'where' =>   'Lamoni Public Library',
    'date' => 'Wednesday, June 9',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '301 West Main, Lamoni, IA'),

  array( 'where' =>   'Murray Public Library',
    'date' => 'Thursday, June 10',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '416 Maple Street, Murray, IA'),

  array( 'where' =>   'Moulton Public Library',
    'date' => 'Thursday, June 10',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '123 Main Street, Moulton, IA'),

  array( 'where' =>   'Schleswig Library',
    'date' => 'Monday, June 14',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '202 Cedar Street, Schleswig, IA'),

  array( 'where' =>   'Kimballton Library',
    'date' => 'Monday, June 14',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '118 Main Street, Kimballton, IA'),

  array( 'where' =>   'Storm Lake City Public Library',
    'date' => 'Tuesday, June 15',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '609 Cayuga Street, Storm Lake City, IA'),

  array( 'where' =>   'Lake City Public Library',
    'date' => 'Tuesday, June 15',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '110 E. Washington Street, Lake City, IA'),

  array( 'where' =>   'Eddyville Public Library',
    'date' => 'Wednesday, June 16',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '202 South Second Street, Eddyville, IA'),

  array( 'where' =>   'Pella Public Library',
    'date' => 'Wednesday, June 16',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '603 Main Street, Pella, IA'),

  array( 'where' =>   'Ankeny Public Library',
    'date' => 'Thursday, June 17',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '1210 Northwest Prairie Road, Ankeny, IA'),

  array( 'where' =>   'Colfax Public Library',
    'date' => 'Thursday, June 17',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '25 West Division Street, Colfax, IA'),

  array( 'where' =>   'Le Mars Public Library',
    'date' => "Monday, June 21",
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '46 First Street Southwest, Le Mars, IA'),

  array( 'where' =>   'Sioux City Public Library',
    'date' => "Monday, June 21",
    "desc" => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '4005 Morningside Ave, Sioux City, IA'),

  array( 'where' =>   'Hawarden Public Library',
    'date' => "Tuesday, June 22",
    "desc" => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '803 10th Street, Howarden, IA'),

  array( 'where' =>   'Orange City Library',
    'date' => 'Tuesday, June 22',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '112 Albany Southeast, Orange City, IA'),

  array( 'where' =>   'Sanborn Public Library',
    'date' => 'Wednesday, June 23',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '407 Main Street, Sanborn, IA'),

  array( 'where' =>   'Inwood Public Library',
    'date' => 'Wednesday, June 23',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '103 South Main, Inwood, IA'),

  array( 'where' =>   'Spirit Lake Public Library',
    'date' => 'Thursday, June 24',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '702 16th Street, Spirit, IA'),

  array( 'where' =>   'Laurens Public Library',
    'date' => 'Thursday, June 24',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '273 North Third Street, Laurens, IA'),

  array( 'where' =>   'Des Moines Public Library',
    'date' => 'Monday, June 28',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '1000 Grand Avenue, Laurens, IA'),

  array( 'where' =>   'Ames Public Library',
    'date' => 'Monday, June 28',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '515 Douglas, Ames, IA'),

  array( 'where' =>   'Iowa Falls Public Library',
    'date' => 'Tuesday, June 29',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 12:30 p.m. and lasts 40 minutes. Encore presentation at 1:30 p.m. Free admission. Open to the public.",
    'addr' => '921 Washington Ave, Iowa Falls, IA'),

  array( 'where' =>   'Algona Public Library',
    'date' => 'Tuesday, June 29',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 4:30 p.m. and lasts 40 minutes. Encore presentation at 5:30 p.m. Free admission. Open to the public.",
    'addr' => '210 North Phillips, Algona, IA'),

  array( 'where' =>   'Belmond Public Library',
    'date' => 'Wednesday, June 30',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '440 East Main, Belmond, IA'),

  array( 'where' =>   'Mason City Public Library',
    'date' => 'Wednesday, June 30',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Encore presentation at 2 p.m. Free admission. Open to the public.",
    'addr' => '225 Second Street Southeast, Mason City, IA'),

  array( 'where' =>   'Alta Vista Public Library',
    'date' => 'Thursday, July 1',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '203 South White Avenue, Alta Vista, IA'),

  array( 'where' =>   'Decorah Public Library',
    'date' => 'Thursday, July 1',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Encore presentation at 2 p.m. Free admission. Open to the public.",
    'addr' => '202 Winnebago Street, Decorah, IA'),

  array( 'where' =>   'West Union Public Library',
    'date' => 'Friday, July 2',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '210 North Vine Street, West Union, IA'),

  array( 'where' =>   'Maynard Public Library',
    'date' => 'Friday, July 2',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '225 Main Street West, Maynard, IA'),

  array( 'where' =>   'Keota Public Library',
    'date' => 'Tuesday, July 6',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '109 East Washington Avenue, Keota, IA'),

  array( 'where' =>   'Keosauqua Public Library',
    'date' => 'Tuesday, July 6',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '608 1st Street, Keosaugua, IA'),

  array( 'where' =>   'Grimes Public Library',
    'date' => 'Wednesday, July 7',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '200 Northwest James, Grimes, IA'),

  array( 'where' =>   'Clive Public Library',
    'date' => "Wednesday, July 7",
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '1900 NW 114th Street, Clive, IA'),

  array( 'where' =>   'Fort Dodge Public Library',
    'date' => "Thursday, July 8",
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '1576 Johnson Avenue, Fort Dodge, IA'),

  array( 'where' =>   'Casey Public Library',
    'date' => "Thursday, July 8",
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '604 Antique Country Drive, Casey, IA'),

  array( 'where' =>   'Cedar Rapids Public Library',
    'date' => 'Friday, July 9',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public. ",
    'addr' => 'Westdale Mall Branch, 2600 Edgewood Road SW, Cedar Rapids, IA'),

  array( 'where' =>   'Keokuk Public Library',
    'date' => 'Monday, July 12',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '210 North Fifth Street, Keokuk, IA'),

  array( 'where' =>   'Burlington Public Library',
    'date' => 'Monday, July 12',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '210 Court Street, Burlington, IA'),

  array( 'where' =>   'Mediapolis Public Library',
    'date' => 'Tuesday, July 13',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '128 North Orchard Street, Mediapolis, IA'),

  array( 'where' =>   'Musser Public Library',
    'date' => 'Tuesday, July 13',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Encore presentation at 2 p.m. Free admission. Open to the public.",
    'addr' => '304 Iowa Avenue, Musser, IA'),

  array( 'where' =>   'Bettendorf Public Library',
    'date' => 'Wednesday, July 14',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '2950 Learning Campus Drive, Bettendorf, IA'),

  array( 'where' =>   'Davenport Public Library',
    'date' => 'Wednesday, July 14',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Encore presentation at 2 p.m. Free admission. Open to the public.",
    'addr' => '3000 North Fairmont, Davenport, IA'),

  array( 'where' =>   'Eldridge Public Library',
    'date' => 'Thursday, July 15',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '200 North 6th Avenue, Eldridge, IA'),

  array( 'where' =>   'Maquoketa Public Library',
    'date' => 'Thursday, July 15',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '126 South Second, Maquoketa, IA'),

  array( 'where' =>   'Iowa City Public Library',
    'date' => 'Sunday, July 18',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '123 South Linn, Iowa City, IA'),

  array( 'where' =>   'Dubuque Public Library',
    'date' => 'Monday, July 19',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '360 West 11th Street, Dubuque, IA'),

  array( 'where' =>   'Dyersville Public Library',
    'date' => 'Monday, July 19',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '320 1st Avenue East, Dyersville, IA'),

  array( 'where' =>   'Waterloo Public Library',
    'date' => 'Tuesday, July 20',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '415 Commercial Street, Waterloo, IA'),

  array( 'where' =>   'Denver Public Library',
    'date' => 'Tuesday, July 20',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1 p.m. and lasts 40 minutes. Encore presentation at 2 p.m. Free admission. Open to the public.",
    'addr' => '100 Washington, Denver, IA'),

  array( 'where' =>   'Cedar Falls Public Library',
    'date' => 'Wednesday, July 21',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Encore presentation at 10:30 a.m. Free admission. Open to the public.",
    'addr' => '524 Main Street, Cedar Falls, IA'),

  array( 'where' =>   'Vinton Public Library',
    'date' => 'Wednesday, July 21',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '510 2nd Avenue, Vinton, IA'),

  array( 'where' =>   'Johnston Public Library',
    'date' => 'Thursday, July 22',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10:15 a.m. and lasts 40 minutes. Encore presentation at 11:15 a.m. Free admission. Open to the public.",
    'addr' => '6700 Merle Hay Road, Johnston, IA'),

  array( 'where' =>   'Boone Public Library',
    'date' => 'Thursday, July 22',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '702 Greene Street, Boone, IA'),

  array( 'where' =>   'Marshalltown Public Library',
    'date' => 'Monday, July 26',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:15 a.m. and lasts 40 minutes. Encore presentation at 10:15 a.m. Free admission. Open to the public.",
    'addr' => '105 West Boone Street'),

  array( 'where' =>   'Urbandale Public Library',
    'date' => 'Monday, July 26',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 1:30 p.m. and lasts 40 minutes. Encore presentation at 2:30 p.m. Free admission. Open to the public.",
    'addr' => '3520 86th, Urbandale, IA'),

  array( 'where' =>   'Coralville Public Library',
    'date' => 'Tuesday, July 27',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 10 a.m. and lasts 40 minutes. Encore presentation at 11 a.m. Free admission. Open to the public.",
    'addr' => '1401 Fifth Street, Coralville, IA'),

  array( 'where' =>   'Newton Public Library',
    'date' => 'Tuesday, July 27',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 2 p.m. and lasts 40 minutes. Encore presentation at 3 p.m. Free admission. Open to the public.",
    'addr' => '100 North Third Avenue West, Newton, IA'),

  array( 'where' =>   'Le Grand Public Library',
    'date' => 'Wednesday, July 28',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '204 North Vine Street, Le Grand, IA'),

  array( 'where' =>   'Woden Public Library',
    'date' => 'Thursday, July 29',
    'desc' => "Stories and adventure with Dan Wardell. Story time starts at 9:30 a.m. and lasts 40 minutes. Free admission. Open to the public.",
    'addr' => '304 Main Street, Woden, IA')
  );

$data = array_slice($all_data, ($current_page-1)*$per_page, $per_page);

?>