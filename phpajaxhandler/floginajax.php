<?php
include_once "C:xampp/htdocs/tuqb/dbhandler/dbConnectionClass.php";
$action = $_POST["action"];

if ($action == "floginajax") {
    // $un="abc123";
    // $pwd="123abc";

    $f_id = $_POST["f_id"];
    $password = $_POST["password"];

    $db = new dbConnectionClass();
    $cmd = "select f_id,password from faculty_details where f_id='" . $f_id . "' and password='" . $password . "';";
    $ps = $db->conn->prepare($cmd);
    // $ps->bindParam(':rollno',$rollno);
    // $ps->bindParam(':password',$password);
    $ps->execute();
    $result = $ps->fetch(PDO::FETCH_ASSOC);
    //print_r($result);

    if (!empty($result) && $result["f_id"] == $f_id && $result["password"] == $password) {
        $rv = array("Status" => "OK");
        header('Content-Type: application/json');
        echo json_encode($rv);
    } else {
        // $rv = array("Status" => "NOT OK", "server_data" => "Invalid Username/Password", "css_property" => "style='color:black;display:flex;justify-content:center'");
        $rv=array("Status"=>"NOT OK");
        header('Content-Type: application/json');
        echo json_encode($rv);
    }
    exit;
}
