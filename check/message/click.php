<?php

session_start();
$_SESSION['username'];

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
        <meta http-equiv="refresh" content="3;url=read-message.php" />


        <title>Building a Speech enabled text field</title>

        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../particles/style.css">
        <link rel="stylesheet" href="../../matrix/style.css">
        <link rel="stylesheet" href="../../index.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="background: black" onload="startDictation()">

        <div class="text" style="height: 100%;width: 100%;margin:0px;background: none">
            <div style="display: none">
                <iframe  src="sounds/click.mp3" allow="autoplay" ></iframe>


                <form id="labnol" method="POST" action="">
                    <div class="speech">
                        <input type="text" name="answer" id="transcript" placeholder="Speak"  />
                        <img  src="//i.imgur.com/cHidSVu.gif" />
                    </div>
                </form>

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
        </div>



        <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="../../matrix/script.js"></script>
        <script  src="js/index_1.js"></script>
    </body>

</html>