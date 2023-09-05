<script src="database/javascript/main.js"></script>
<?php 
  session_start();
  $account = $_POST["account"];
  $password = $_POST["password"];
  if ($account!="" && $password!="") {
    if ($account=="admin" && $password=="admin")
    {
        $_SESSION["user"] = "administrator";
    }
  }
?>
<?php include "bootstrap.php" ?>
<title>資料輸入入口網站</title>
</head>

<body>
    <div class="container">
        <h1>學生資料網站</h1>
        <?php include "header.php"; ?>
        <p>點擊上面的選項，執行更多的功能</p>
        <?php
            if ($_SESSION["user"] !="administrator") {
        ?>
             <form action="index.php" method="POST">
             管理者帳號：<input type=text size=10 name="account" autocomplete="off"><br>
             管理者密碼：<input type=password size=10 name="password" autocomplete="off"><br>
             <input type=submit value="登入">
             <input type=reset value="清除">
             </form>
        <?php
            } else {
                echo '<a href="logout.php" class="btn btn-danger">登出</a>';
            }
        ?>  
    </div>
    <?php include "database/hbfd/footer.php" ?>