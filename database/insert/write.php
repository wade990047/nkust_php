
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">
<title>資料庫查詢</title>

</head>

<?php 
    include "../hbfd/bootstrap.php";
?>
<body>
    <div class="container">
    <h1>學生資料輸入網站!</h1>
    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "../hbfd/header.php";
        include '../hbfd/database_connect.php';
        $link = link_db();
        $i = 0;
        $j = 0;
        //echo "test1";
        $inputType = $_POST["sql_event"];
        if ($inputType == "write") {
            $sid = $_POST['sid'];
            $sname = $_POST['sname'];
            $skil = $_POST['skil'];
            $styp = $_POST['styp'];
            $stid = $_POST['stid'];
            $scre = $_POST['scre'];
            // sql語法存在變數中
            $sql = "INSERT INTO student (School_ID, Name, Skill, Type, Type_ID, Score_credit) VALUE ('$sid','$sname','$skil','$styp','$stid','$scre')";
            
            //echo "<br>".$sql;
            if ($link->query($sql) === TRUE) {
               echo "資料已成功保存到MySQL數據庫中。";
            ?>
            <button onclick="window.location.href='database.php'">返回輸入介面</button>
            <?php
            }
            else {
                echo "儲存失敗: " . $sql . "<br>" . $link->error;
            }
            // 關閉與MySQL數據庫的連接
            $link->close();
        }
        elseif ($inputType == "csv") {
            //打開CSV檔案並讀取數據
            $filename = $_FILES["csvfile"]["tmp_name"];
            $file = fopen($filename, "r");
            fgetcsv($file);
            while (($data = fgetcsv($file)) !== FALSE) {
                // 構建SQL插入語句
                $sql = "INSERT INTO student (School_ID, Name, Skill, Type, Type_ID, Score_credit, Needy_serve, Grade)
                        VALUES ('" . $data[0] . "', '" . $data[1] . "', '" . $data[2] . "', '" . $data[3] . "', '" . $data[4] . "', '" . $data[5] . "', '" . $data[6] . "', '" . $data[7] . "')";
                //echo "<br>".$sql;
                // 執行插入
                if ($link->query($sql) === TRUE) {
                    $i++;
                } else {
                    $j = $i + 1;
                    echo "資料插入失敗：" . $link->error . "<br>";
                }
            }
            echo "<h2>共有". $i . "筆資料成功輸入</h2><br>";
            if($j!=0){
                echo "<h2>第". $j . "筆資料輸入失敗</h2><br>";
            }
            ?>
            <button onclick="window.location.href='database.php'">返回輸入介面</button>
            <?php
            fclose($file);
        }
    }
        include "../hbfd/footer.php"; 
        ?>
    </div>
</body>