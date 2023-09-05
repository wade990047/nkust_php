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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">主選單</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://stu.nkust.edu.tw/p/412-1007-798.php?Lang=zh-tw">諮商輔導組</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="database/isp/isp_input.php">ISP頁面測試</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        所有功能
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="database/insert/database.php">新增學生基本資料</a></li>
                        <li><a class="dropdown-item" href="database/other/add.php">新增學生其他資料</a></li>
                        <li><a class="dropdown-item" href="database/search/search.php">查詢資料</a></li>
                    </ul>
                <?php
                    if ($_SESSION["user"] != "administrator") {
                    } else {
                        echo "</li>";
                        echo "<li class=\"nav-item\">";
                        echo "<a class=\"nav-link\" href=\"logout.php\">登出</a>";
                        echo "</li>";
                    }
                ?>  
            </ul>
        </div>
    </div>
</nav>