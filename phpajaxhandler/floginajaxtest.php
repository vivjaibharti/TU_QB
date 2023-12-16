<?php

// $rv=array("Status"=>"OK");
$rv = array("Status" => "NOT OK", "server_data" => "Invalid Username/Password", "css_property" => "style='color:black;display:flex;justify-content:center'");
header('Content-Type: application/json');
echo json_encode($rv);
exit;
