<!DOCTYPE html>
<html>
<head>
<?php 
    include "../../bootstrap.php";
?>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid #000000;
            padding: 10px;
        }
        td.no_left_boarder {
            border-left: none;
        }
        td.no_right_boarder {
            border-right: none;
        }
        td.centerd {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>學生資料上傳網站!</h1>
        <?php include "header.php"; ?>
        <br>
    <table>
        <?php
        $rowcount = 10; // 直排行數
        $colcount = 3; // 橫排列數
        for ($i = 1; $i <= $rowcount; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $colcount; $j++) {
                if(($i==1 and $j==2) or ($i==9 and $j==2) or ($i==10 and $j==2)) {
                    echo "<td class=\"centerd\" colspan=\"2\">Row $i, Col $j</td>";
                }
                elseif(($i==1 and $j==3) or ($i==9 and $j==3) or ($i==10 and $j==3)) {
                    echo "";
                }
                else {
                    echo "<td>Row $i, Col $j</td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
    <?php include "../../hbfd/footer.php"; ?>
    </div>
</body>