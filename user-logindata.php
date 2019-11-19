<?php
include('dbcon.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql="Select * FROM users WHERE username='$username' AND password='$pass'";
    $stmt=$con->query($sql);
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if($row==FALSE){?>
        <script>
            alert("Incorrect Username or Passwod!!");
            window.open("index.php","_self");
        </script>
        <?php
    }
    else{
        $acno=$row['account'];
        session_start();
        $_SESSION['ano']=$acno;
            if(isset($_SESSION['ano'])){
                header("location:userdash/index.php");
            }
    }
}
?>