<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<header>
    <H1>Webboard PEXXVIII</H1>
</header>
<body  style="text-align: center;">
    <?php
    echo "ต้องการดูกระทู้ $_GET[id]";

    ?>
    <form>
    <table style="border: 2px solid #D4D2F2; width: auto;" align="center">
            <tr><td colspan="2" style="background-color: #6CD2FE;">แสดงความคิดเห็น</td></tr>

            <tr><td></td><td><textarea type="text" name="text" size="30" required></textarea></td></tr>    
            <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
        </table>
    </form>
    <a href="index.html">กลับไปหน้าหลัก</a>
    
</body>
</html>