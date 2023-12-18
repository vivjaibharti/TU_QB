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
        $cmd = "select f_id,name,gender,dep_id,sch_id,email_id from faculty_details where f_id='" . $f_id . "';";
        $ps = $db->conn->prepare($cmd);
        $ps->execute();
        $result = $ps->fetch(PDO::FETCH_ASSOC); 
        session_start();
        $_SESSION["f_id"]=$result["f_id"];
        $_SESSION["name"]=$result["name"];
        $_SESSION["dep_id"]=$result["dep_id"];
        $_SESSION["sch_id"]=$result["sch_id"];
        $_SESSION["email_id"]=$result["email_id"];
        $rv = array("Status" => "OK");
        header('Content-Type: application/json');
        echo json_encode($rv);
    } else {
        // $rv = array("Status" => "NOT OK", "server_data" => "Invalid Username/Password", "css_property" => "style='color:black;display:flex;justify-content:center'");
        session_start();
        session_destroy();
        $rv=array("Status"=>"NOT OK");
        header('Content-Type: application/json');
        echo json_encode($rv);
    }
    exit;
}
 