
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">
<title>資料庫查詢</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/styles.css">

<script>
  window.onload = function() {
    var table = document.getElementById("studentinfo_table");
    table.addEventListener("click", function(event) {
      var target = event.target;
      if (target.classList.contains("delete_btn")) {
        event.preventDefault();
        swal({
            title: "確定要刪除該筆資料?",
            icon: "warning",
            buttons: {
                delete: {
                    text: "刪除",
                    value: "刪除",
                    className: "delete-btn"
                },
                close: {
                    text: "取消",
                    value: "取消",
                    className: "default-btn"
                }
            ,
            },dangerMode: true
        }).then((value) => {
            switch(value) {
                case "刪除": 
                    var rowId = target.getAttribute("data-row-id");
                    var deleteUrl = "delete.php?id=" + rowId;
                    window.location.href = deleteUrl;
                    break;
                default:
                    swal.close();
            }
      });
    }
    });
  };
</script>

</head>

<?php 
    include "../hbfd/bootstrap.php";
?>
<body>
    <div class="container">
    <h1>學生資料查詢網站!</h1>
    <?php 
    include "../hbfd/header.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '../hbfd/database_connect.php';
        $link = link_db();
        $fid = $_POST['fid'];
        $fname = $_POST['fname'];
        if($fid!="" || $fname !="") {
            $sql = "SELECT * FROM student WHERE School_ID='$fid' OR Name='$fname'";
        }
        else {
            $sql = "SELECT * FROM student ORDER BY School_ID DESC LIMIT 10";
        }
        $result = $link->query($sql);
        if ($result->num_rows > 0) { ?>
            <table id="studentinfo_table" class="table table-striped">
            <tr>
                <td>學號</td>
                <td>姓名</td>
                <td>科系</td>
                <td>礙別</td>
                <td>程度</td>
                <td>學分</td>
                <td>功能</td>
            </tr>
            <?php
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo 
                "<td><p style=\"color:#0062ad;\">" . $row["School_ID"] . "</p></td>" .
                "<td><p style=\"color:#0062ad;\">" . $row["Name"] . "</p></td>" .
                "<td><p style=\"color:#0062ad;\">" . $row["Skill"] . "</p></td>" .
                "<td><p style=\"color:#0062ad;\">" . $row["Type"] . "</p></td>" .
                "<td><p style=\"color:#0062ad;\">" . $row["Type_ID"] . "</p></td>" .
                "<td><p style=\"color:#0062ad;\">" . $row["Score_credit"] . "</p></td>" .
                "<td><a href='../other/info.php?name="
                . $row["Name"] . "' class='btn btn-outline-danger btn-sm score_btn' data-row-id='" . $row["id"] . "'>其他資料" .
                "<a href='delete.php?id="
                . $row["id"] . "' class='btn btn-outline-danger btn-sm delete_btn' data-row-id='" . $row["id"] . "'>刪除</td>" .
                "</tr>";
            }
            ?>
            </table>
        <?php
          } else {
            echo "<h2>沒有相關資料<br></h2>";
        }
        $link->close();
        }
        ?>
        <button onclick="window.location.href='search.php'">返回輸入介面</button>
        <?php include "../hbfd/footer.php"; ?>
    </div>
</body>