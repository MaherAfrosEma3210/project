<?php
header('Expires: Sun, 01 Jan 2014 00:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

require_once '../database/connection.php';
session_start();
$message = "";
if (isset($_POST["submit"])) {


    $username = preg_replace('/\s+/', '', $_POST['username']);
    $_SESSION['username'];

    if ($username === $_SESSION['username']) {

        $sql = "INSERT INTO `users`(`username`) VALUES ('$username')";

        if ($conn->query($sql) === TRUE) {
            header('location:password.php');
        } else {
            header('location:username-taken.php');
        }
    } else {
        header('location:username-not-matched.php');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="refresh" content="60;url=username.php" />
    <title></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../particles/style.css">
    <link rel="stylesheet" href="../matrix/style.css">
    <!-- <link rel="stylesheet" href="../index.css"> -->
    <style>
        input[type="submit"] {
            height: 800px;
            width: 100%;
            background: none;
            outline: none;
            border: none
        }
    </style>
</head>

<body style="background: black" onload="startButton(event)">

    <audio src="sounds/confirm-username.mp3" autoplay></audio>

    <br>
    <div class="text" style="height: 100%;width: 100%">
        <form method="Post">
            <div id="results">
                <textarea cols="93" rows="10" id="final_span" class="final" name="username" required></textarea>
                <span id="interim_span" class="interim" style="display: none"></span>
                <p>
            </div>
            <input type="submit" class="btn" name="submit" value="submit" />

        </form>

        <?php include './parts/essential.php'; ?>
    </div>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="../matrix/script.js"></script>
    <!-- <script src="../index.js"></script> -->
    <script src="../js/index.js"></script>
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