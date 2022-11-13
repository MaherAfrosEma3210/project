<?php
require './database/connection.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $reply = $_POST['reply'];
    $email = $_POST['email'];
    $replier = $_POST['replier'];

    if (empty($username) || empty($reply) || empty($replier) || empty($email)) {
        $warning = "Opps! No fields can not be left empty! ";
        echo "<script type='text/javascript'>alert('$warning');</script>";
        echo"<script>document.location='reply.php';</script>";
    } else {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $replier = mysqli_real_escape_string($conn, $_POST['replier']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $reply = mysqli_real_escape_string($conn, $_POST['reply']);
        
        date_default_timezone_set('Asia/Dhaka');
        $replytime  = date("F j, Y, g:i a");
        
        $compare_date = date("Y-m-d");
        $compare_time = date("h:i:s");
        $status = '0';
        
        $sql ="INSERT INTO `replies`(`username`, `replier`,`email`,`reply`, `replytime`, `compare_date`, `compare_time`, `status`) VALUES ('$username','$replier','$email','$reply','$replytime','$compare_date','$compare_time','$status')";
        
        if($conn->query($sql)=== true){
            $warning = "Reply received. Thank you";
            echo "<script type='text/javascript'>alert('$warning');</script>";
            echo"<script>document.location='reply.php';</script>";
            
        }
        else{
             $warning = "Something wrong! Please try again";
            echo "<script type='text/javascript'>alert('$warning');</script>";
            echo"<script>document.location='reply.php';</script>";
        }
        
        
    }
}
?>


<!DOCTYPE html>
<html>
    <head>
        <script src="ckeditor/ckeditor.js"></script>
        <style>

            body{
                background-color: black;
            }
            center{
                
            }
            input{
                width: 100%;
                height: 50px;


            }
            input[type="submit"]{
                width: 100%;
                height: 50px;
                background:whitesmoke;
                cursor: pointer

            }
            textarea{
                width: 96%;
            }
        </style>

    </head>
    <body>

    <center>
        <form method="POST" action="">
            <div style="height: 50%;width: 50%">
                <input type="text" name="username" placeholder="Enter the username..." required/> <br><br>
                <input type="text" name="replier" placeholder="Enter your name..." required/> <br><br>
                <input type="text" name="email" placeholder="Enter the  Email..." required/> <br><br>
                <textarea  id="editor1" name="reply" required>Type your reply here....</textarea>
                <script>
                    CKEDITOR.replace('editor1');
                </script><br><br>
                <input type="submit" name="submit" >
            </div>

        </form>

    </center>

</body>

</html>
<?php
$conn->close();
?>