<?php
session_start();
if (isset($_SESSION["f_id"])) {
    $f_id = $_SESSION["f_id"];
    $name = $_SESSION["name"];
    $dep_id = $_SESSION["dep_id"];
    $sch_id = $_SESSION["sch_id"];
    $email_id = $_SESSION["email_id"];
} else {
    echo "Error:Please login First";
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tuqb/css/home.css">
    <title>Home</title>
</head>

<body>

    <div class="mainDiv" id="mainDiv">
        <div class="innerDiv" id="innerDiv">
            <div class="profile" id="profile">
                <div>
                    <h1><b>Welcome!!!</b></h1>
                    <div class="xLFont">
                        <b>
                            <?php
                            echo $name;
                            ?>
                        </b>
                    </div>
                </div>
                <div class="depDiv">
                    <div class="smallFont">
                        Department_Id:
                    </div>
                    <div class="bigFont">
                        <?php
                        echo $dep_id;
                        ?>
                    </div>
                </div>
                <div class="schDiv">
                    <div class="smallFont">
                        School_Id:
                    </div>
                    <div class="bigFont">
                        <?php
                        echo $sch_id;
                        ?>
                    </div>
                </div>
            </div>
            <div class="tab">
                <button class="studentButton" id="btn1">
                    <div>
                        Create Question Paper
                    </div>
                </button>

                <button class="studentButton" id=btn2>
                    <div>
                        Fetch Question Paper
                    </div>
                </button>

                <button class="studentButton" id="btn3">
                    <div>
                        Edit Profile
                    </div>
                </button>

            </div>
        </div>
    </div>
    <script src="/tuqb/jquery/jquery.js"></script>
    <script src="/tuqb/userinterface/home/home.js"></script>
</body>

</html>