
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">

<title>資料庫查詢</title>

</head>
<script src="../javascript/main.js"></script>
<?php 
    include "../hbfd/bootstrap.php";
?>
<body>
    <div class="container">
    <h1>學生資料查詢網站!</h1>
    <?php include "../hbfd/header.php"; ?>
    <h2>輸入資料進行查詢，單筆即可查詢
    <form method="post" action="find.php">
    <br>
    無輸入則查詢最近的十筆資料<br><br>
    學生學號 <input type="text", autocomplete="off", name="fid", id="fid"><br><br>
    學生姓名 <input type="text", autocomplete="off", name="fname", id="fname"><br><br>
    <input type="submit" value="查詢資料">
    </form>
    <?php include "../hbfd/footer.php"; ?>
    </div>
</body>
