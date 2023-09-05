
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">

<title>資料庫上傳</title>

</head>

<?php 
    include "../hbfd/bootstrap.php";
?>
<body>
    <div class="container">
    <h1>學生資料上傳網站!</h1>
    <?php include "../hbfd/header.php"; ?>
    <form method="POST" action="write.php" enctype="multipart/form-data">    
        <input type="radio" id="write" name="sql_event" value="write" checked>
        <label for="write">手動輸入</label>
        <input type="radio" id="csv" name="sql_event" value="csv">
        <label for="csv">檔案輸入</label><br>
    <div id = "write_input">
        <br>
        學生學號 <input type="text" autocomplete="off" name="sid" required><br>
        學生姓名 <input type="text" autocomplete="off" name="sname" required><br>
        學生系別 <input type="text" autocomplete="off" name="skil" required><br>
        學生障別 <input type="text" autocomplete="off" name="styp"><br>
        障礙程度 <input type="text" autocomplete="off" name="stid"><br>
        學分需求 <input type="text" autocomplete="off" name="scre"><br>
    </div>
    <div id = "csv_input" style="display: none">
        <br>
        <label for="csvfile">選擇一個 CSV 文件:</label>
        <input type="file" name="csvfile" id="csvfile" ><br><br>
        <br>
    </div>
        <br><input type="submit" value="上傳資料">
    </form> 
    <script>
      // 當 radio button 被選擇時切換顯示手動輸入或是 CSV 匯入的欄位
      var writeInput = document.getElementById("write_input");
      var csvInput = document.getElementById("csv_input");
      var writeRadio = document.getElementById("write");
      var csvRadio = document.getElementById("csv");
      
      writeRadio.addEventListener("click", function() {
        writeInput.style.display = "block";
        csvInput.style.display = "none";
      });
      
      csvRadio.addEventListener("click", function() {
        writeInput.style.display = "none";
        csvInput.style.display = "block";
      });

      // 提交表單
      var form = document.querySelector("form");
      var submitButton = document.querySelector("input[type='submit']");

      submitButton.addEventListener("click", function(event) {
        event.preventDefault(); // 阻止預設的表單提交行為
        form.submit(); // 手動提交表單
      });
    </script>
    <?php include "../hbfd/footer.php"; ?>
    </div>
</body>
