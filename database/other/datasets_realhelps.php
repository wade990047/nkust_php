<?php
include '../hbfd/database_connect.php';
    $link = link_db();
    $name = $_GET['name'];
    $year = $_GET['year'];
    $sql = "SELECT * FROM student_help_all WHERE Name='$name' AND year='$year'";
    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $help_1 = $row["help-1"];
            $help_2 = $row["help-2"];
            $help_3 = $row["help-3"];
            $help_4 = $row["help-4"];
            $help_5 = $row["help-5"];
            $help_6 = $row["help-6"];
            $help_7 = $row["help-7"];
            $help_8 = $row["help-8"];
            $help_9 = $row["help-9"];
            $help_10 = $row["help-10"];
            $help_11 = $row["help-11"];
            $help_12 = $row["help-12"];
            $help_13 = $row["help-13"];
            $help_14 = $row["help-14"];
        }
    }
    $data = [
        'labels' => ['ISP訂定與檢核','學習協助輔導','生活協助輔導','輔具協助輔導',
                     '社會適應及參與輔導','生涯輔導','轉銜輔導','心理輔導',
                     '轉介服務','鑑定輔導','會議宣導及校內資源協助','畢業追蹤','支持與諮詢服務','其他協助'
                    ],
        'values' => [
                    (int)$help_1,(int)$help_2,(int)$help_3,(int)$help_4,
                    (int)$help_5,(int)$help_6,(int)$help_7,(int)$help_8,
                    (int)$help_9,(int)$help_10,(int)$help_11,(int)$help_12,(int)$help_13,(int)$help_14
                    ]
    ];
    if (!$result) {
    die("查詢錯誤：" . $link->error);
    }
    header('Content-Type: application/json');
    echo json_encode($data);
?>