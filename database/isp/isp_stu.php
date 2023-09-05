<?php
    include "checkboxes/checkboxlist_stu.php";

    $rowcount = 7; // 直排行數
    $colcount = 3; // 橫排列數
    $tableData = [
        ["項目", "需求", "申請協助支持項目"],
        ["一、行動能力",""],
        ["二、生活適應", ""],
        ["三、溝通能力", ""],
        ["四、醫療健康", ""],
        ["五、自我情緒與社交技巧", ""],
        ["六、學業", ""]
    ];
?>
<form method="POST" action="stu_db.php">
<?php
    for ($i = 0; $i < $rowcount; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colcount; $j++) {
                echo "<td>";
                if ($i === 1 && $j === 1) {
                    needy1();
                } elseif ($i === 1 && $j === 2) {
                    help1();
                } elseif ($i === 2 && $j === 1) {
                    needy2();
                } elseif ($i === 2 && $j === 2) {
                    help2();
                } elseif ($i === 3 && $j === 1) {
                    needy3();
                } elseif ($i === 3 && $j === 2) {
                    help3();
                } elseif ($i === 4 && $j === 1) {
                    needy4();
                } elseif ($i === 4 && $j === 2) {
                    help4();
                } elseif ($i === 5 && $j === 1) {
                    needy5();
                } elseif ($i === 5 && $j === 2) {
                    help5();
                } elseif ($i === 6 && $j === 1) {
                    needy6();
                } elseif ($i === 6 && $j === 2) {
                    help6();
                } else {
                    echo $tableData[$i][$j];
                }
                echo "</td>";
            }
        }
        echo "</tr>";
    
?>
    <input type="submit" value="提交">
</form>