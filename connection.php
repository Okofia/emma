<?php
   $link = mysqli_connect('localhost','root', '');
if (!$link)
    {
    $output = 'Unable to connect to database server.';
    include '404.php';
	exit();
    }
if(!mysqli_set_charset($link, 'utf8'))
    {
    $output = 'Unable to set database connection encoding.';
    include '404.php';
	exit();
    }
if (!mysqli_select_db($link, 'globe'))
   {
   $output = 'Unable to locate database establishement .';
   include '404.php';
   exit();
 }
?>
