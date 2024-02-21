<?php
session_start();
if(isset($_SESSION['id'])){
    header("location:index.php");
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>

    <?php
    
    $Login= ($_POST['login']);
    $password = ($_POST['pwd']);
    if($Login == "admin" && $password == "ad1234"){
        $_SESSION["username"] ="admin";
        $_SESSION["role"] = "a";
        $_SESSION["id"] = session_id();
        header("location:index.php");
        die();
        //echo "ยินดีตอนรับคุณ ADMIN";
    }elseif ($Login == "member" && $password == "mem123"){
        $_SESSION["username"] = "member";
        $_SESSION["role"] = "m";
        $_SESSION["id"] = session_id();
        header("location:index.php");
        die();
        //echo "ยินดีต้อนรับคุณ MAMBER";
       
    }else {
        $_SESSION['error']='error';
        header("location:login.php");
        die();
    }
    //echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";

    ?>
    //<a href="index.php">"กลับไปหน้าหลัก"</a>

   
    
</body>
</html>