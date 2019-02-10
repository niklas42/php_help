<?php

$server = 'localhost';
$user = 'root';
$pwd = '';
//$db = 'tankstelle';

try {
    $con = new PDO('mysql:host='.$server,
    $user, $pwd);
    // Exception Handling explizit einschalten
    $con->setAttribute(PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION);
} catch(Exception $e)
{
    echo $e->getMessage();
}
?>