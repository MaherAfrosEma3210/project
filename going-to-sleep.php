<?php
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); # Date In The Past
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT"); # Always Modified
header("Cache-Control: no-store, no-cache, must-revalidate"); # HTTP/1.1
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); # HTTP/1.0

?>

<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="6;url=sleeping.php" />
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

    <body>
        
        <audio src="sounds/going-to-sleep.mp3" autoplay></audio>

    </body>

</html>
