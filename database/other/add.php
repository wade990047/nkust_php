
<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">

<title>學生詳細上傳</title>

</head>
<style>
label {
  display: inline-block;
  width: 220px; /* 調整標籤的寬度，根據需要進行調整 */
}

input[type="text"] {
  width: 200px; /* 調整輸入框的寬度，根據需要進行調整 */
}
input[type="date"] {
  width: 200px; /* 調整輸入框的寬度，根據需要進行調整 */
  text-align: center;
}
.form-container {
    display: flex;
    justify-content: space-between;
}

.form {
    width: 50%; /* 調整表單寬度 */
    padding: 20px;
    border: 1px solid #ccc;
}

/* 調整文字的對齊方式 */
/* 如果希望標籤文字右對齊，將text-align屬性設置為right */
/* 如果希望標籤文字居中對齊，將text-align屬性設置為center */
/* 如果希望標籤文字左對齊（默認值），則無需額外設置 */
label {
  text-align: left;
}

/* 如果希望輸入框中的文字居中對齊，將text-align屬性設置為center */
/* 如果希望輸入框中的文字左對齊（默認值），則無需額外設置 */
input[type="text"] {
  text-align: center;
}

#inputContainer label {
    text-align: left;
    display: inline-block; /* 让文本和单选按钮都在一行上 */
    width: 40%; /* 调整文本宽度，根据您的需要进行调整 */
}

/* 设置单选按钮的样式，使其向右对齐 */
#inputContainer input[type="radio"] {
    float: right;
    margin-right: 5px; /* 可根据需要进行调整 */
    margin-top: 6px; /* 可根据需要进行调整 */
}

#inputContainer2 label {
    text-align: left;
    display: inline-block; /* 让文本和单选按钮都在一行上 */
    width: 35%; /* 调整文本宽度，根据您的需要进行调整 */
}

/* 设置单选按钮的样式，使其向右对齐 */
#inputContainer2 input[type="radio"] {
    float: right;
    margin-right: 5px; /* 可根据需要进行调整 */
    margin-top: 6px; /* 可根据需要进行调整 */
}
</style>
<?php 
    include "../hbfd/bootstrap.php";
?>

<body>
    <div class="container">
    <h1>學生資料上傳網站!</h1>
    <?php include "../hbfd/header.php"; ?>
    <script src="../javascript/main.js"></script>
    <br>
    <div class="form-container">
        <div class="form">
            <form method="POST" action="write_real_helps.php" enctype="multipart/form-data">
            <!-- 月份 <input type="text" id= "month" name="month" pattern="\d{1,2}" maxlength="2" required><br>
            時數 <input type="text" autocomplete="off" name="hour" required><br><br> -->
            <h3>輔導服務項目</h3>
            姓名 <input type="text" name="name" required><br>
            學期 <input type="text" name="year" placeholder="格式為 xxx-x 例如111-2" required><br>
            日期 <input type="date" name="time" required><br>
            備註 <input type="text" name="info" placeholder="50字內為限" required><br><br>
            <select id="objectSelect" onchange="real_helps()" onload="real_helps()">
                <option value="object1">01. ISP訂定與檢核</option>
                <option value="object2">02. 學習協助輔導</option>
                <option value="object3">03. 生活協助輔導</option>
                <option value="object4">04. 輔具協助輔導</option>
                <option value="object5">05. 社會適應及參與輔導</option>
                <option value="object6">06. 生涯輔導</option>
                <option value="object7">07. 轉銜輔導</option>
                <option value="object8">08. 心理輔導</option>
                <option value="object9">09. 轉介服務</option>
                <option value="object10">10. 鑑定輔導</option>
                <option value="object11">11. 會議宣導及校內資源協助</option>
                <option value="object12">12. 畢業追蹤</option>
                <option value="object13">13. 支持與諮詢服務</option>
                <option value="object14">14. 其他協助</option>
            </select><br><br>
            <h3>本次執行時數：</h3>
            <div id="inputContainer">
            <!-- 在選擇物件後，這裡會動態生成相應的輸入框 -->
            </div>
            <input type="hidden" id="selectedObject" name="selectedObject" value="">
            <br><input type="submit" value="上傳資料"><br>
            </form>
        </div>
        <div class="form">
            <form method="POST" action="write_info_helps.php" enctype="multipart/form-data">
            <!-- 月份 <input type="text" id= "month" name="month" pattern="\d{1,2}" maxlength="2" required><br>
            時數 <input type="text" autocomplete="off" name="hour" required><br><br> -->
            <h3>行政服務項目</h3>
            姓名 <input type="text" name="name" required><br>
            學期 <input type="text" name="year" placeholder="格式為 xxx-x 例如111-2" required><br>
            日期 <input type="date" name="time" required><br>
            備註 <input type="text" name="info" placeholder="50字內為限" required><br><br>
            <select id="objectSelect2" onchange="info_helps()" onload="info_helps()">
                <option value="object1">01. 課業輔導</option>
                <option value="object2">02. 協助同學</option>
                <option value="object3">03. 定期考試協助</option>
                <option value="object4">04. 活動邀請/通知</option>
                <option value="object5">05. 公務通知</option>
            </select><br><br>
            <h3>本次執行時數：</h3>
            <div id="inputContainer2">
            <!-- 在選擇物件後，這裡會動態生成相應的輸入框 -->
            </div>
            <input type="hidden" id="selectedObject2" name="selectedObject2" value="">
            <br><input type="submit" value="上傳資料"><br>
            </form>
        </div>
    </div>
    <br>
    <?php include "../hbfd/footer.php"; ?>
    </div>
    <script>

        function real_helps() {

            var selectedObject = document.getElementById("objectSelect").value;
            var inputContainer = document.getElementById("inputContainer");
            inputContainer.innerHTML = "";

            var inputFields = [];

            if (selectedObject === "object1") {
                inputFields = [
                    { label: "1. 期初需求評估", name: "input1"},
                    { label: "2. 期末服務檢核", name: "input2"}
                ];
            } else if (selectedObject === "object2") {
                inputFields = [
                    { label: "1. 課堂協助", name: "input1" },
                    { label: "2. 考試協助", name: "input2" },
                    { label: "3. 作業及報告協助", name: "input3" },
                    { label: "4. 修課調整協助", name: "input4" },
                    { label: "5. 給老師一封信", name: "input5" },
                    { label: "6. 課業輔導", name: "input6" },
                    { label: "7. 申請課業協助同學", name: "input7" },
                    { label: "8. 課輔職前訓練", name: "input8" },
                    { label: "9. 其他", name: "input9" }
                ];
            } else if (selectedObject === "object3") {
                inputFields = [
                    { label: "1. 生活協助需求評估", name: "input1" },
                    { label: "2. 申請生活協助同學", name: "input2" },
                    { label: "3. 協同職前訓練", name: "input3" },
                    { label: "4. 校園無障礙協助", name: "input4" },
                    { label: "5. 其他", name: "input5" }
                ];
            } else if (selectedObject === "object4") {
                inputFields = [
                    { label: "1. 輔具需求與申請評估", name: "input1" },
                    { label: "2. 輔具維修、變更", name: "input2" },
                    { label: "3. 輔具繳回協助", name: "input3" },
                    { label: "4. 其他", name: "input4" }
                ];
            } else if (selectedObject === "object5") {
                inputFields = [
                    { label: "1. 期初會議/活動", name: "input1" },
                    { label: "2. 期中會議/活動", name: "input2" },
                    { label: "3. 期末會議/活動", name: "input3" },
                    { label: "4. 校外參訪", name: "input4" },
                    { label: "5. 學伴會議", name: "input5" },
                    { label: "6. 特教宣導活動", name: "input6" },
                    { label: "7. 人際團體活動", name: "input7" },
                    { label: "8. 情感輔導活動", name: "input8" },
                    { label: "9. 其他", name: "input9" }
                ];
            } else if (selectedObject === "object6") {
                inputFields = [
                    { label: "1. 職涯資訊職涯資訊", name: "input1" },
                    { label: "2. 生涯/職業輔導評量測驗", name: "input2" },
                    { label: "3. 職涯諮詢", name: "input3" },
                    { label: "4. 校內工讀", name: "input4" },
                    { label: "5. 生涯規劃", name: "input5" },
                    { label: "6. 生/職涯輔導活動", name: "input6" },
                    { label: "7. 其他", name: "input7" }
                ];
            } else if (selectedObject === "object7") {
                inputFields = [
                    { label: "1. 入學轉銜", name: "input1" },
                    { label: "2. 退學、轉學轉銜", name: "input2" },
                    { label: "3. 就業轉銜", name: "input3" },
                    { label: "4. 新生家長座談", name: "input4" },
                    { label: "5. 畢業轉銜會議", name: "input5" },
                    { label: "6. 其他", name: "input6" }
                ];
            } else if (selectedObject === "object8") {
                inputFields = [
                    { label: "1. 課業學習", name: "input1" },
                    { label: "2. 親密關係", name: "input2" },
                    { label: "3. 人際互動", name: "input3" },
                    { label: "4. 生活適應", name: "input4" },
                    { label: "5. 情緒困擾", name: "input5" },
                    { label: "6. 家庭關係", name: "input6" },
                    { label: "7. 其他", name: "input7" }
                ];
            } else if (selectedObject === "object9") {
                inputFields = [
                    { label: "1. 心理諮商", name: "input1" },
                    { label: "2. 團體諮商", name: "input2" },
                    { label: "3. 轉介社區資源", name: "input3" },
                    { label: "4. 其他", name: "input4" }
                ];
            } else if (selectedObject === "object10") {
                inputFields = [
                    { label: "1. 鑑定提報", name: "input1" },
                    { label: "2. 鑑定相關輔導", name: "input2" },
                    { label: "3. 鑑定相關聯繫", name: "input3" },
                    { label: "4. 其他", name: "input4" }
                ];
            } else if (selectedObject === "object11") {
                inputFields = [
                    { label: "1. 資教空間與設備使用需求", name: "input1" },
                    { label: "2. 校內資源協助", name: "input2" },
                    { label: "3. 入班宣導", name: "input3" },
                    { label: "4. 入系宣導", name: "input4" },
                    { label: "5. 個案會議", name: "input5" },
                    { label: "6. ISP會議", name: "input6" },
                    { label: "7. 其他", name: "input7" }
                ];
            } else if (selectedObject === "object13") {
                inputFields = [
                    { label: "1. 醫療諮詢", name: "input1" },
                    { label: "2. 社區資源", name: "input2" },
                    { label: "3. 家庭支持", name: "input3" },
                    { label: "4. 選課", name: "input4" },
                    { label: "5. 學雜費減免", name: "input5" },
                    { label: "6. 獎助學金", name: "input6" },
                    { label: "7. 其他", name: "input7" }
                ];
            } else if (selectedObject === "object12" || selectedObject === "object14") {
                inputFields = [
                    { label: "1. 次數", name: "input1" }
                ];
            }    

            // 動態生成輸入框
            
            for (var i = 0; i < inputFields.length; i++) {
                var label = document.createElement("label");
                label.textContent = inputFields[i].label;
                var input = document.createElement("input");
                input.type = "number";
                input.name = inputFields[i].name;
                input.value = 0;
                input.required = true;
                input.min = 0;

                inputContainer.appendChild(label);
                inputContainer.appendChild(input);
                inputContainer.appendChild(document.createElement("br"));
            }
            var selectedObject1 = document.getElementById("objectSelect").value;
            document.getElementById("selectedObject").value = selectedObject1;
        }

        function info_helps() {

            var selectedObject = document.getElementById("objectSelect2").value;
            var inputContainer = document.getElementById("inputContainer2");
            inputContainer.innerHTML = "";

            var inputFields = [];

            if (selectedObject === "object1") {
                inputFields = [
                    { label: "1. 任課老師", name: "input1"},
                    { label: "2. 研究生", name: "input2"},
                    { label: "3. 其他相關領域老師", name: "input3" },
                    { label: "4. 其他", name: "input4" }
                ];
            } else if (selectedObject === "object2") {
                inputFields = [
                    { label: "1. 同班同學", name: "input1" },
                    { label: "2. 同系學長姐或學弟妹", name: "input2" },
                    { label: "3. 資源教室同學", name: "input3" },
                    { label: "4. 其他", name: "input4" }
                ];
            } else if (selectedObject === "object3") {
                inputFields = [
                    { label: "1. 延長考試時間", name: "input1" },
                    { label: "2. 報讀", name: "input2" },
                    { label: "3. 代寫", name: "input3" },
                    { label: "4. 電腦作答", name: "input4" },
                    { label: "5. 獨立考場", name: "input5" },
                    { label: "6. 替代方案", name: "input6" },
                    { label: "7. 其他", name: "input7" }
                ];
            } else if (selectedObject === "object4") {
                inputFields = [
                    { label: "1. 期初會議/活動", name: "input1" },
                    { label: "2. 期中會議/活動", name: "input2" },
                    { label: "3. 期末會議/活動", name: "input3" },
                    { label: "4. 校外參訪", name: "input4" },
                    { label: "5. 學伴會議", name: "input5" },
                    { label: "6. 特教宣導活動", name: "input6" },
                    { label: "7. 人際團體活動", name: "input7" },
                    { label: "8. 情感輔導活動", name: "input8" },
                    { label: "9. 生/職涯輔導活動", name: "input9" },
                    { label: "10. 轉銜會議通知", name: "input10" },
                    { label: "11. 其他會議/活動", name: "input11" }
                ];
            } else if (selectedObject === "object5") {
                inputFields = [
                    { label: "1. 定期考試協助通知", name: "input1" },
                    { label: "2. 選課通知", name: "input2" },
                    { label: "3. 學雜費減免通知", name: "input3" },
                    { label: "4. 學伴申請通知", name: "input4" },
                    { label: "5. 課輔申請通知", name: "input5" },
                    { label: "6. 其他", name: "input6" }
                ];
            }

            // 動態生成輸入框

            
            for (var i = 0; i < inputFields.length; i++) {
                var label = document.createElement("label");
                label.textContent = inputFields[i].label;
                var input = document.createElement("input");
                input.type = "number";
                input.name = inputFields[i].name;
                input.value = 0;
                input.required = true;
                input.min = 0;

                inputContainer.appendChild(label);
                inputContainer.appendChild(input);
                inputContainer.appendChild(document.createElement("br"));
            }
            var selectedObject = document.getElementById("objectSelect2").value;
            document.getElementById("selectedObject2").value = selectedObject;
            
        }

        window.onload = function() {
            clockTick();
        };
        real_helps();
        info_helps();

    </script>
</body>
