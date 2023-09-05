
<!doctype html>
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
        $inputFields = array('input1', 'input2', 'input3', 'input4', 'input5', 'input6', 'input7', 'input8', 'input9', 'input10', 'input11');
        $inputs = array();
        foreach ($inputFields as $field) {
            if (isset($_POST[$field])) {
                $inputs[] = mysqli_real_escape_string($link, $_POST[$field]);
            }
        }
        if (isset($_POST['selectedObject2'])) {
            $selectedObject = $_POST['selectedObject2'];
        }
        echo "<br>".$inputs[0]."<br>".$inputs[1]."<br>".$inputs[2]."<br>".$selectedObject;
        $selectedObjectNumber = str_replace("object", "", $selectedObject);
        echo "<br>".$selectedObjectNumber;
        $query = "SELECT * FROM student_infohelp_$selectedObjectNumber WHERE year = '$year' AND name = '$name'";
        echo "<br>".$query;
        $result = mysqli_query($link, $query);
        echo "<br>".mysqli_num_rows($result);
        if (mysqli_num_rows($result) > 0) {
            if($selectedObjectNumber == 1 || $selectedObjectNumber == 2) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $updateQuery = "UPDATE student_infohelp_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $updateQuery = "UPDATE student_infohelp_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 4) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8] + $inputs[9] + $inputs[10];
                $updateQuery = "UPDATE student_infohelp_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`help-7`='$inputs[6]',`help-8`='$inputs[7]',`help-9`='$inputs[8]',`help-10`='$inputs[9]',`help-11`='$inputs[10]',
                `total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            else if($selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $updateQuery = "UPDATE student_infohelp_$selectedObjectNumber SET `help-1`='$inputs[0]',`help-2`='$inputs[1]',`help-3`='$inputs[2]',`help-4`='$inputs[3]',
                `help-5`='$inputs[4]',`help-6`='$inputs[5]',`total`='$total'
                    WHERE year='$year' AND name='$name'";
            }
            mysqli_query($link, $updateQuery);
            echo "<br><br>";
        }
        else {
            if($selectedObjectNumber == 1 || $selectedObjectNumber == 2) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3];
                $insertQuery = "INSERT INTO student_infohelp_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$total')";
            }
            else if($selectedObjectNumber == 3) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6];
                $insertQuery = "INSERT INTO student_infohelp_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$total')";
            }
            else if($selectedObjectNumber == 4) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5] + $inputs[6] + $inputs[7] + $inputs[8] + $inputs[9] + $inputs[10];
                $insertQuery = "INSERT INTO student_infohelp_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `help-7`, `help-8`, `help-9`,`help-10`,`help-11`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$inputs[6]','$inputs[7]','$inputs[8]','$inputs[9]','$inputs[10]','$total')";
            }
            else if($selectedObjectNumber == 5) {
                $total = $inputs[0] + $inputs[1] + $inputs[2] + $inputs[3] + $inputs[4] + $inputs[5];
                $insertQuery = "INSERT INTO student_infohelp_$selectedObjectNumber (`year`, `name`, `help-1`, `help-2`, `help-3`, `help-4`, `help-5`, `help-6`, `total`) 
                    VALUES ('$year','$name','$inputs[0]','$inputs[1]','$inputs[2]','$inputs[3]','$inputs[4]','$inputs[5]','$total')";
            }
            echo "<br><br>";

            mysqli_query($link, $insertQuery);
        }
        $query = "SELECT * FROM student_infohelp_all WHERE year = '$year' AND name = '$name'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            $allQuery = "UPDATE student_infohelp_all SET `help-$selectedObjectNumber`='$total'";
        }
        else {
            $allQuery = "INSERT INTO `student_infohelp_all` (`year`,`name`,`help-$selectedObjectNumber`) VALUES ('$year','$name','$total')";
        }
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