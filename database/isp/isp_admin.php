<?php
    include "checkboxes/checkboxlist_admin.php";

    $rowcount = 8; // 直排行數
    $colcount = 4; // 橫排列數
    $tableData = [
        ["項目", "需求", "申請協助支持項目", "輔導老師檢核"],
        ["一、行動能力","", "", ""],
        ["二、生活適應", "", "", ""],
        ["三、溝通能力", "", "", ""],
        ["四、醫療健康", "", "", ""],
        ["五、自我情緒與社交技巧", "", "", ""],
        ["六、學業", "", "", ""],
        ["綜合評估"]
    ];

    for ($i = 0; $i < $rowcount; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $colcount; $j++) {
            if ($i === 7 && $j === 1) {
                echo "<td class='center' colspan='3'><input type='text' class='custom-border' name='feedback'></td>";
            } elseif ($i === 7 && $j >= 2) {
                echo "";
            } else {
                echo "<td>";
                if ($i === 1 && $j === 1) {
                    needy1();
                } elseif ($i === 1 && $j === 2) {
                    help1();
                } elseif ($i === 1 && $j === 3) {
                    ans1();
                } elseif ($i === 2 && $j === 1) {
                    needy2();
                } elseif ($i === 2 && $j === 2) {
                    help2();
                } elseif ($i === 2 && $j === 3) {
                    ans2();
                } elseif ($i === 3 && $j === 1) {
                    needy3();
                } elseif ($i === 3 && $j === 2) {
                    help3();
                } elseif ($i === 3 && $j === 3) {
                    ans3();
                } elseif ($i === 4 && $j === 1) {
                    needy4();
                } elseif ($i === 4 && $j === 2) {
                    help4();
                } elseif ($i === 4 && $j === 3) {
                    ans4();
                } elseif ($i === 5 && $j === 1) {
                    needy5();
                } elseif ($i === 5 && $j === 2) {
                    help5();
                } elseif ($i === 5 && $j === 3) {
                    ans5();
                } elseif ($i === 6 && $j === 1) {
                    needy6();
                } elseif ($i === 6 && $j === 2) {
                    help6();
                } elseif ($i === 6 && $j === 3) {
                    ans6();
                }  else {
                    echo $tableData[$i][$j];
                }
                echo "</td>";
            }
        }
        echo "</tr>";
    }
?>