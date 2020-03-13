<?
$prefix_delite = substr($_SERVER['REQUEST_URI'], 0, -3);
$prefix = substr($_SERVER['REQUEST_URI'], -3);
if($prefix == '-r/')
	header( 'Location: https://'.$_SERVER['HTTP_HOST'].$prefix_delite.'/', true, 301 );