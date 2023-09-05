
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
        // 将选定的对象值转换为数字
        $selectedObjectNumber = str_replace("object", "", $selectedObject);
        // 构建查询语句
        $query = "SELECT * FROM student_help_$selectedObjectNumber WHERE year = '$year' AND name = '$name'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            if($selectedObjectNumber == 1) {
                $total = $inputs[0] + $inputs[1];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 2 || $selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`help-8`='$inputs[7]',`help-9`='$inputs[8]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
                
            }
            else if($selectedObjectNumber == 4 || $selectedObjectNumber == 9 || $selectedObjectNumber == 10) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 6 || $selectedObjectNumber == 8 || $selectedObjectNumber == 11 || $selectedObjectNumber == 13) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 7) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 12 || $selectedObjectNumber == 14) {
                $total = $inputs[0];
                $updateQuery = "UPDATE student_help_$selectedObjectNumber SET `help-1`='$inputs[0]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            mysqli_query($link, $updateQuery);
            echo "<br><br>";
        }
        else {
            if($selectedObjectNumber == 1) {
                $total = $inputs[0] + $inputs[1];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$total')";
            }
            else if($selectedObjectNumber == 2 || $selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$inputs[7]','$inputs[8]','$total')";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$total')";
            }
            else if($selectedObjectNumber == 4 || $selectedObjectNumber == 9 || $selectedObjectNumber == 10) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$total')";
            }
            else if($selectedObjectNumber == 6 || $selectedObjectNumber == 8 || $selectedObjectNumber == 11 || $selectedObjectNumber == 13) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$total')";
            }
            else if($selectedObjectNumber == 7) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$total')";
            }
            else if($selectedObjectNumber == 12 || $selectedObjectNumber == 14) {
                $total = $inputs[0];
                $insertQuery = "INSERT INTO student_help_$selectedObjectNumber (`year`, `name`, `help-1`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$total')";
            }
            echo "<br><br>";

            mysqli_query($link, $insertQuery);
        }        
        $query = "SELECT * FROM student_help_all WHERE year = '$year' AND name = '$name'";
        $result = mysqli_query($link, $query);

        mysqli_num_rows($result) > 0?
        $allQuery = "UPDATE student_help_all SET `help-$selectedObjectNumber`='$total'":
        $allQuery = "INSERT INTO student_help_all (`year`,`name`,`help-$selectedObjectNumber`) VALUES ('$year','$name','$total')";
        mysqli_query($link, $allQuery);
        echo "資料已成功上傳到MySQL數據庫中。";

        /* 
        $query = "SELECT * FROM student_help_1 WHERE year = '$year' AND Name = '$name'";
        $month = $_POST['month'];
        $hour = $_POST['hour'];

        $query = "SELECT * FROM student_learn_hour WHERE year = '$year' AND Name = '$name'";
        $result = mysqli_query($link, $query);

        if (mysqli_num_rows($result) > 0) {
            if($month == 2 || $month == 9) {
                $updateQuery = "UPDATE student_learn_hour SET month_1 = '$hour' WHERE year='$year' AND Name='$name'";
            }
            else if($month == 3 || $month == 10) {
                $updateQuery = "UPDATE student_learn_hour SET month_2 = '$hour' WHERE year='$year' AND Name='$name'";
            }
            else if($month == 4 || $month == 11) {
                $updateQuery = "UPDATE student_learn_hour SET month_3 = '$hour' WHERE year='$year' AND Name='$name'";
            }
            else if($month == 5 || $month == 12) {
                $updateQuery = "UPDATE student_learn_hour SET month_4 = '$hour' WHERE year='$year' AND Name='$name'";
            }
            else if($month == 6 || $month == 1) {
                $updateQuery = "UPDATE student_learn_hour SET month_5 = '$hour' WHERE year='$year' AND Name='$name'";
            }
            mysqli_query($link, $updateQuery);
            echo "資料已成功更新到MySQL數據庫中。";
        }
        else {
            if($month == 2 || $month == 9) {
                $insertQuery = "INSERT INTO student_learn_hour (year, Name, month_1) VALUES ('$year','$name','$hour')";
            }
            else if($month == 3 || $month == 10) {
                $insertQuery = "INSERT INTO student_learn_hour (year, Name, month_2) VALUES ('$year','$name','$hour')";
            }
            else if($month == 4 || $month == 11) {
                $insertQuery = "INSERT INTO student_learn_hour (year, Name, month_3) VALUES ('$year','$name','$hour')";
            }
            else if($month == 5 || $month == 12) {
                $insertQuery = "INSERT INTO student_learn_hour (year, Name, month_4) VALUES ('$year','$name','$hour')";
            }
            else if($month == 6 || $month == 1) {
                $insertQuery = "INSERT INTO student_learn_hour (year, Name, month_5) VALUES ('$year','$name','$hour')";
            }
            mysqli_query($link, $insertQuery);
            echo "資料已成功上傳到MySQL數據庫中。";
        } */
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