<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0


if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'yes') {
        header('location:instruction.php');
    } else if ($answer === 'no') {
        header('location:question3.php');
    }else if ($answer === 'login') {
        header('location:./login/question4.php');
    } else {
        header('location:error.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="10;url=question2.php" />
        <title>Building a Speech enabled text field</title>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto'>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <style>
            body{
                background: black;
                background-repeat: no-repeat; /* Do not repeat the image */
                background-size:cover; /* Resize the background image to cover the entire container */

            }
            img {
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
            }
            ::-webkit-scrollbar { 
                display: none; 
            }

        </style>
    </head>

    <body onload="startDictation()">
        <div style="display: none">
            <audio src="sounds/question2.mp3" autoplay></audio>

            <form id="labnol" method="POST" action="">
                <div class="speech">
                    <input type="text" name="answer" id="transcript" placeholder="Speak"  />
                    <!-- <img  src="//i.imgur.com/cHidSVu.gif" /> -->
                </div>
            </form>
        </div>
        <img src="images/loading (1).gif" class="center" />
        <script  src="js/index.js"></script>
        <script>
        function refresh() {

            setTimeout(function () {
                location.reload()
            }, 100);
        }
        </script>

    </body>

</html>
