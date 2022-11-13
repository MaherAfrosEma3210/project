<?php
require_once '../database/connection.php';
session_start();
$message = "";
if (isset($_POST["submit"])) {


    $address = $_POST['address'];
    $id = $_SESSION['mail_id'];

    if ($address === $_SESSION['address']) {

        $sql = "INSERT INTO `email`(`address`,`mail_id`) VALUES ('$address','$id')";

        if ($conn->query($sql) === TRUE) {
            header('location:subject.php');
        } else {
            echo 'Error' . $sql . "<br>" . $conn->error;
        }
    } else {
        header('location:address-not-matched.php');
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="expires" content="Sun, 01 Jan 2014 00:00:00 GMT"/>
        <meta http-equiv="pragma" content="no-cache" />
        <title></title>
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../particles/style.css">
        <link rel="stylesheet" href="../matrix/style.css">
        <link rel="stylesheet" href="../index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>

        </script>
    </head>
    <body style="background: black" onload="startButton(event)">
<!--        <iframe src="sounds/50276813.mp3"></iframe>-->
        <audio src="sounds/confirm-username.mp3" autoplay></audio>
        <br>
        <div class="text">
            <form method="Post">
                <div id="results">
                    <textarea cols="93" rows="10" id="final_span" class="final" name="address"></textarea>
                    <span id="interim_span" class="interim" style="display: none"></span>
                    <p>
                </div>
                <input type="submit" class="btn" name="submit" value="submit"/>
                <?php echo $message ?>
            </form>

            <?php include './parts/essential.php'; ?>
        </div>
        <script src="js/index.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../matrix/script.js"></script>
        <script src="../index.js"></script>
        <script  src="../js/index.js"></script>
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
