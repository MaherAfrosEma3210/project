<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0

session_start();
$_SESSION['username'];
$_SESSION['mail_id'];

if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'yes') {
        header('location:http://localhost/voice-based-emailing-system/login/what-to-check.php');
    } else if ($answer === 'no') {
        header('location: go-to-sleep.php');
    } else {
        header('location: error.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="9;url=check-inbox.php" />
    <title>Building a Speech enabled text field</title>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style>
        body {
            background: black;
            background-repeat: no-repeat;
            /* Do not repeat the image */
            background-size: cover;
            /* Resize the background image to cover the entire container */

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
        <audio src="sounds/check-inbox.mp3" autoplay></audio>

        <form id="labnol" method="POST" action="">
            <div class="speech">
                <input type="text" name="answer" id="transcript" placeholder="Speak" />
                <img src="//i.imgur.com/cHidSVu.gif" />
            </div>
        </form>
    </div>
    <img src="images/loading (1).gif" class="center" />
    <script src="js/index.js"></script>
    <script>
        function click(e) {
            if (navigator.appName == 'Netscape' && e.which == 3) {
                window.location.reload();
                return false;
            } else {
                if (navigator.appName == 'Microsoft Internet Explorer' && event.button == 2)
                    window.location.reload();
                return false;
            }
            return true;
        }
        document.onmousedown = click;
        document.oncontextmenu = new Function("window.location.reload();return false;");
    </script>

</body>

</html>