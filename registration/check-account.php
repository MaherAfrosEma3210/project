<?php
require_once '../database/connection.php';

session_start();
$username = $_SESSION['username'];

if (isset($_POST["answer"])) {

    $answer = $_POST["answer"];
    if ($answer === 'yes') {
        header('location:../login/question4.php');
    } else if ($answer === 'no') {
        header('location:try-again.php');
    } else {
        header('location:../error.php');
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
        <meta http-equiv="refresh" content="60;url=check-account.php" />


        <title>Building a Speech enabled text field</title>

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../particles/style.css">
        <link rel="stylesheet" href="../matrix/style.css">
        <link rel="stylesheet" href="../index.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>

    <body style="background: black" onload="startDictation()">

        <div class="text" style="height: 100%;width: 100%;margin:0px">
            <div style="display: none">
                <iframe  src="sounds/check-account.mp3" allow="autoplay" ></iframe>


                <form id="labnol" method="POST" action="">
                    <div class="speech">
                        <input type="text" name="answer" id="transcript" placeholder="Speak"  />
                        <img  src="//i.imgur.com/cHidSVu.gif" />
                    </div>
                </form>

            </div>
            <div class=buttons>
                <button id=play style="height: 800px;width: 100%;background:none;border: none;outline: none"></button> &nbsp;
                <button id=pause></button> &nbsp;
                <button id=stop></button>
            </div>
            <article style="display: none">
                <?php
                $sql = "SELECT * FROM `users` WHERE username = '$username'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <h1>The spelling of your username is : <?php echo $row['username'] ?></h1>
                        <p>Your password is: <?php echo $row['password'] ?></p>
                        <p>Is everything ok here?</p>
                        <?php
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </article>
            <script>
                onclick = function () {
                    if ('speechSynthesis' in window)
                        with (speechSynthesis) {

                            var playEle = document.querySelector('#play');
                            var pauseEle = document.querySelector('#pause');
                            var stopEle = document.querySelector('#stop');
                            var flag = false;

                            playEle.addEventListener('click', onClickPlay);
                            pauseEle.addEventListener('click', onClickPause);
                            stopEle.addEventListener('click', onClickStop);

                            function onClickPlay() {
                                if (!flag) {
                                    flag = true;
                                    utterance = new SpeechSynthesisUtterance(document.querySelector('article').textContent);
                                    utterance.voice = getVoices()[0];
                                    utterance.onend = function () {
                                        flag = false;
                                        playEle.className = pauseEle.className = '';
                                        stopEle.className = 'stopped';
                                    };
                                    playEle.className = 'played';
                                    stopEle.className = '';
                                    speak(utterance);
                                }
                                if (paused) { /* unpause/resume narration */
                                    playEle.className = 'played';
                                    pauseEle.className = '';
                                    resume();
                                }
                            }

                            function onClickPause() {
                                if (speaking && !paused) { /* pause narration */
                                    pauseEle.className = 'paused';
                                    playEle.className = '';
                                    pause();
                                }
                            }

                            function onClickStop() {
                                if (speaking) { /* stop narration */
                                    /* for safari */
                                    stopEle.className = 'stopped';
                                    playEle.className = pauseEle.className = '';
                                    flag = false;
                                    cancel();

                                }
                            }

                        }

                    else { /* speech synthesis not supported */
                        msg = document.createElement('h5');
                        msg.textContent = "Detected no support for Speech Synthesis";
                        msg.style.textAlign = 'center';
                        msg.style.backgroundColor = 'red';
                        msg.style.color = 'white';
                        msg.style.marginTop = msg.style.marginBottom = 0;
                        document.body.insertBefore(msg, document.querySelector('div'));
                    }

                }
            </script>
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
        <script src="../matrix/script.js"></script>
        <script src="../index.js"></script>
        <script  src="../js/index.js"></script>
    </body>

</html>