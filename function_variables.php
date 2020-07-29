<?php

function longdate($timestamp)
{ 
	return date("l F jS Y",$timestamp);
}

echo longdate(time());

echo "<br>";

echo time();

echo "<br>";

echo longdate(time() - 29 * 365 * 24 * 60 * 60 );

// local variables

echo "<br>";

function longdate1 ($timestamp)
{
	$temp = date ("l F jS Y",$timestamp);
	return "The date is $temp";
}

echo longdate1(time());
echo $temp;

echo "<br>";

$temp1= "The date is ";

function longdate2($timestamp)
{
	return $temp1 . date("l F jS Y ", $timestamp);
}

echo longdate2(time());

//repair above

echo "<br>";
echo "<br>";

$temp2="The date is ";

echo $temp2 . longdate3(time());

function longdate3($timestamp)
{
	return date("l F jS Y",$timestamp);
}

//passing local variable as argument

echo "<br>";
echo "<br>";

$temp4 = " Displaying Today's date on screen as - ";


function longdate4($text,$timestamp)
{
	return $text . date("l F jS Y",$timestamp);
}

echo longdate4($temp4,time());

//global variables

global $is_logged_in;

//static variables
echo "<br>";
echo "<br>";

function test()
{
	static $count =0;
    echo $count;
    $count++;

}

echo test();
echo "<br>";
echo test();

echo "<br>";
echo test();


// superglobal variables
echo "<br>";
echo $GLOBALS;

echo "<br>";
echo $_SERVER;

echo "<br>";
echo $_GET;

echo "<br>";
$came_from = $_SERVER['HTTP_REFERER'];
echo $came_from;

echo "<br>";
//security for superglobal variables

$came_from = htmlentities($_SERVER['HTTP_REFERER']);
echo $came_from;

//uploaded to repository


?>