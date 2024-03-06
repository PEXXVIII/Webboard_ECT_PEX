<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body >
    <div class="container-lg">
        <h1 style="text-align:center;" class="mt-3">Webboard PEXJAV</h1>
        <?php include "nav.php" ?>
        <diV class="row mt-4">
            <div class="col-lg-3 col-md-2 col-ms-1"></div>
            <div class="col-lg-6 col-md-8 col-ms-10">

                    <?php
                    $conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root",""); 
                    $sql="SELECT post.title,post.content,post.post_date,user.login
                    FROM post INNER JOIN user ON
                    (post.user_id=user.id) WHERE post.id=$_GET[id]";
                    $result=$conn->query($sql);
                    while($row=$result->fetch()){

                        echo "<diV class='card border-primary'>";
                        echo "<div class='card-header bg-primary text-whit'>$row[0]</div>";
                        echo "<div class='card-body'>$row[1]<br><br>$row[3] - $row[2]</div>";
                        echo "</div><br>";


                    };
                    
                  
                     $sql1="SELECT comment.content,comment.post_date,user.login 
                    FROM comment INNER JOIN user ON
                    (comment.user_id=user.id) WHERE comment.post_id=$_GET[id]";
                    $result=$conn->query($sql1);
                    $i=1;
                    while($row=$result->fetch()){

                        echo "<diV class='card border-info'>";
                        echo "<div class='card-header bg-info text-whit'>ความคิดเห็นที่ $i</div>";
                        echo "<div class='card-body'>$row[0]<br><br>$row[2] - $row[1]</div>";
                        echo "</div>";
                        $i=$i+1;
                    };
                   

                    ?>
                    
                <?php if (isset($_SESSION['id'])){ ?>
                
                <div class="card border-success mt-3">
                <div class="card-header bg-success text-white">
                    แสดงความคิดเห็น</div>    
                    <div class="card body">
                        <form action="post_save.php" method="post">
                            <input type="hidden" name="post_id"
                            value="<?= $_GET['id'];?>"> 
                            <div class="row mb-3 justify-content-center">
                                <diV class="col-lg-10">
                                    <textarea name="comment" rows="8"
                                    class="form-control" required></textarea>
                                </diV>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-success btn-sm text-white">
                                        <i class="bi bi-box-arrow-up-right"></i> ส่งข้อความ
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm ms-2">
                                        <i class="bi bi-x-square"></i>ยกเลิก</button>


                                </div>
                            </div>

                        </form>
                        </diV>
                    </div>
                    <?php }?>  
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </diV>
    </div>
    
    
</body>
</html>