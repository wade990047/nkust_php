<?php
include '../hbfd/database_connect.php';
    $link = link_db();
    $name = $_GET['name'];
    $year = $_GET['year'];
    $info_sql = "SELECT * FROM student_infohelp_all WHERE Name='$name' AND year='$year'";
    $info_result = $link->query($info_sql);
    if ($info_result->num_rows > 0) {
        while ($row = $info_result->fetch_assoc()) {
            $info_help_1 = $row["help-1"];
            $info_help_2 = $row["help-2"];
            $info_help_3 = $row["help-3"];
            $info_help_4 = $row["help-4"];
            $info_help_5 = $row["help-5"];
        }
    }
    $info_data = [
        'labels' => ['課業輔導','協助同學','定期考試協助','活動邀請/通知','公務通知'],
        'values' => [(int)$info_help_1,(int)$info_help_2,(int)$info_help_3,(int)$info_help_4,(int)$info_help_5]
    ];
    if (!$info_result) {
    die("查詢錯誤：" . $link->error);
    }
    header('Content-Type: application/json');
    echo json_encode($info_data);
?>