<!DOCTYPE html>
<html>
<head>
<?php 
    session_start();
    include "../hbfd/bootstrap.php";
    echo "<link rel=\"stylesheet\" href=\"../css/styles.css\">";
?>
</head>
<body>
    <div class="container">
    <div class="header">
        <!-- 標頭內容 -->
        <h1>學生資料上傳網站!</h1>
        <?php include "../hbfd/header.php"; ?>
    </div>
    <div class="content">
        <br>
            <table class="outer_border">
                <?php
                    if ($_SESSION["user"] == "administrator") {
                        include "isp_admin.php";
                    }
                    else {
                        include "isp_stu.php";
                    }?>
            </table>
    </div>
    <div class="footer">
        <?php include "../hbfd/footer.php"; ?>
    </div>
</body>