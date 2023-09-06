
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
        $name = $_POST['name'];
        $year = $_POST['year'];
        $time = $_POST['time'];
        $info = $_POST['info'];

        $inputFields = array('input1', 'input2', 'input3', 'input4', 'input5', 'input6', 'input7', 'input8', 'input9');
        $inputs = array();

        foreach ($inputFields as $field) {
            if (isset($_POST[$field])) {
                $inputs[] = mysqli_real_escape_string($link, $_POST[$field]);
            }
        }
        if (isset($_POST['selectedObject'])) {
            $selectedObject = $_POST['selectedObject'];
        }
        $selectedObjectNumber = str_replace("object", "", $selectedObject);
        // 构建查询语句
        $query = "SELECT * FROM student_help_$selectedObjectNumber WHERE year = '$year' AND name = '$name' AND time='$time'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            if($selectedObjectNumber == 1) {
                $total = $inputs[0] + $inputs[1];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',
                `total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            else if($selectedObjectNumber == 2 || $selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`help-8`='$inputs[7]',`help-9`='$inputs[8]',
                `total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
                
            }
            else if($selectedObjectNumber == 4 || $selectedObjectNumber == 9 || $selectedObjectNumber == 10) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            else if($selectedObjectNumber == 6 || $selectedObjectNumber == 8 || $selectedObjectNumber == 11 || $selectedObjectNumber == 13) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            else if($selectedObjectNumber == 7) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            else if($selectedObjectNumber == 12 || $selectedObjectNumber == 14) {
                $total = $inputs[0];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`total`='$total',`time`='$time',`info`='$info'
                    WHERE year='$year' AND name='$name' AND time='$time'";
            }
            mysqli_query($link, $updateQuery);
            echo "<br><br>";
        }
        else {
            if($selectedObjectNumber == 1) {
                $total = $inputs[0] + $inputs[1];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 2 || $selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$inputs[7]','$inputs[8]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 4 || $selectedObjectNumber == 9 || $selectedObjectNumber == 10) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 6 || $selectedObjectNumber == 8 || $selectedObjectNumber == 11 || $selectedObjectNumber == 13) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 7) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$total','$time','$info')";
            }
            else if($selectedObjectNumber == 12 || $selectedObjectNumber == 14) {
                $total = $inputs[0];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `total`,`time`,`info`) 
                    VALUES ('$year','$name','$inputs[0]','$total','$time','$info')";
            }
            echo "<br><br>";

            mysqli_query($link, $insertQuery);
        }        

        $sql = "SELECT total FROM student_help_$selectedObjectNumber WHERE year = '$year' AND name = '$name'";
        $result = mysqli_query($link, $sql);
        $totalArray = array();
        $totalSum = 0;
        while ($row = $result->fetch_assoc()) {
            $total = $row["total"];
            $totalArray[] = $total; // 將每個total添加到陣列中
            $totalSum += $total;   // 將total加到總和中
        }

        $query = "SELECT * FROM student_help_all WHERE year = '$year' AND name = '$name'";
        $result = mysqli_query($link, $query);

        mysqli_num_rows($result) > 0?
        $allQuery = "UPDATE student_help_all SET `help-$selectedObjectNumber`='$totalSum'":
        $allQuery = "INSERT INTO student_help_all (`year`,`name`,`help-$selectedObjectNumber`) VALUES ('$year','$name','$totalSum')";
        mysqli_query($link, $allQuery);
        echo "資料已成功上傳到MySQL數據庫中。";
        ?>
        <button onclick="window.location.href='info.php?name=<?php echo $name; ?>'">前往資料介面</button>
        <?php
        }
        // 關閉與MySQL數據庫的連接
        $link->close();
        include "../hbfd/footer.php"; 
        ?>
    </div>
</body>