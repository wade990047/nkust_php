
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">
<title>資料庫查詢</title>
<?php 
    session_start();
    include "../hbfd/bootstrap.php";
    echo "<link rel=\"stylesheet\" href=\"../css/styles.css\">";
?>
</head>
<body>
    <div class="container">
    <h1>學生資料輸入網站!</h1>
    <?php 
        include "../hbfd/header.php";
        include '../hbfd/database_connect.php';
        echo "test1";
        echo "<br>";
        $link = link_db();
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            echo var_dump($_POST);
            echo "<br>";
            echo $_POST;
            echo "<br>";
            echo $_POST['category6'];
            echo "<br>";
            if (isset($_POST['category1'])) {
                $category1_values = $_POST['category1'];
        
                foreach ($category1_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp1_move ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型一的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
            if (isset($_POST['category2'])) {
                $category2_values = $_POST['category2'];
        
                foreach ($category2_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp2_life ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型二的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
            if (isset($_POST['category3'])) {
                $category3_values = $_POST['category3'];
        
                foreach ($category3_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp3_talk ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型三的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
            if (isset($_POST['category4'])) {
                $category4_values = $_POST['category4'];
        
                foreach ($category4_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp4_health ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型四的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
            if (isset($_POST['category5'])) {
                $category5_values = $_POST['category5'];
        
                foreach ($category5_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp5_self ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型五的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
            if (isset($_POST['category6'])) {
                $category6_values = $_POST['category6'];
        
                foreach ($category6_values as $checkbox_id => $value) {
                    $column_name = $checkbox_id;
                    $boolean_value = ($value === 'true') ? 1 : 0;

                    $sql = "INSERT INTO isp6_school ($column_name) VALUES ($boolean_value)";
                    if (mysqli_query($link, $sql)) {
                        echo "資料類型六的資料插入成功！";
                    } else {
                        echo "错误：" . mysqli_error($link);
                    }
                }
            }
        }
        include "../hbfd/footer.php"; 
        ?>
    </div>
</body>