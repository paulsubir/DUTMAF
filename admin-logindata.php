<?php
include('dbcon.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $pass=$_POST['password'];
    $sql="Select * FROM admin WHERE username='$username' AND password='$pass'";
    $stmt=$con->query($sql);
    $row= $stmt->fetch(PDO::FETCH_ASSOC);
    if($row==FALSE){?>
        <script>
            alert("Incorrect Username or Passwod!!");
            window.open("admin-login.php","_self");
        </script>
        <?php
    }
    else{
        $uname=$row['username'];
        session_start();
        $_SESSION['uname']=$uname;
            if(isset($_SESSION['uname'])){
            header("location:admindash/index.php");
         }
    }
}
?>