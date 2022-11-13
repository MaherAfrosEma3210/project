<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta HTTP-EQUIV="Refresh" CONTENT="5; URL=<?php echo $_SERVER['HTTP_REFERER'] ?>">
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
         <audio src="sounds/error.mp3" autoplay></audio>
        <img src="images/loading (1).gif" class="center" />
   </body>

</html>
