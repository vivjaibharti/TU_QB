<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/tuqb/css/createquestion.css">
    <title>Create_QP</title>
</head>

<body>
    <div class="mainDiV">
        <form id="questionForm" method="POST" action="question.php">

            <p>Enter the Questions for the exam:</p>

            <div id="questionContainer">
                <!-- parent div -->

            </div>

            <button style="display: block; margin: 0 auto;" type="button" id="addQuestionBtn">Add New Question</button><br>
            <input type="submit" value="Submit" style="display: block; margin: 0 auto;">

        </form>
    </div>

    <script src="/tuqb/jquery/jquery.js"></script>
    <script src="/tuqb/userinterface/createquestion/createquestion.js"></script>
</body>

</html>