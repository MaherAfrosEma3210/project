<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0

session_start();


$_SESSION['username'];

if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'yes') {
        header('location:click2.php');
    } else if ($answer === 'no') {
        header('location:../../go-to-sleep.php');
    } else {
        header('location:../../error.php');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="cache-control" content="max-age=0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="-1">
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 11:00:00 GMT">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="pragma" content="no-cache">
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="15;url=no-mail.php" />

    <title>Building a Speech enabled text field</title>

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../particles/style.css">
    <link rel="stylesheet" href="../../matrix/style.css">
</head>

<body style="background: black" onload="startDictation()">

    <div class="text">
        <div style="display: none">
            <iframe src="sounds/no-email.mp3" allow="autoplay"></iframe>
            <form id="labnol" method="POST" action="">
                <div class="speech">
                    <input type="text" name="answer" id="transcript" placeholder="Speak" />
                    <img src="//i.imgur.com/cHidSVu.gif" />
                </div>
            </form>
        </div>
    </div>

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

    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../../matrix/script.js"></script>
    <script src="js/index_1.js"></script>
</body>

</html>