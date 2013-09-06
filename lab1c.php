<?php
header('Content-Type: text/html; charset=utf-8');
$browser = $_SERVER['HTTP_USER_AGENT'];
if(strpos($_SERVER["HTTP_USER_AGENT"],'MSIE') !== FALSE)
{
	print "Vous utilisez Internet Explorer ! ARRIÈRE SATAN!!!!";
}
else
{
        print "Vous utilisez $browser . BRAVO !!!! ;)";
}
include("index.html");


