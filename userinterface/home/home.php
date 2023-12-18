<?php
    session_start();
    if(isset($_SESSION["f_id"]))
    {
        $f_id=$_SESSION["f_id"];
    }
    else
    {
        echo "Error:Please login First";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>This is home page..</h1>
    <?php
    echo "<br>".$_SESSION["f_id"];
    ?>
</body>
</html>