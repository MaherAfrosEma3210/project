<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0

if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'hello') {
        header('location:index.php');
    } else {
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="6;url=sleeping.php" /> -->
    <title>Building a Speech enabled text field</title>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {

            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */
            background: black;

        }

        img {
            margin-top: 20%;
            width: 200px;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
</head>

<body onload="startDictation()">
    <div style="display: none">


        <form id="labnol" method="POST" action="">
            <div class="speech">
                <input type="text" name="answer" id="transcript" placeholder="Speak" />
                <img src="//i.imgur.com/cHidSVu.gif" />
            </div>
        </form>
    </div>

    <center>
        <img src="images/sleeping.gif" class="center" />
        <div style="width: 200px">
            <marquee behavior="" direction="right">
                <h4 style="color:white">. . .</h4>
            </marquee>
        </div>
    </center>
    <script src="js/index.js"></script>


</body>

</html>