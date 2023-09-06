<!doctype html>
<!-- lang代表網頁主要語言,如果有設對於搜尋引擎是友善的,對於瀏覽器在判斷是有幫助的 -->
<html lang="zh-Hant-TW">
<title>資料庫查詢</title>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
    <h1>學生詳細資料</h1>
    <?php 
    include "../hbfd/header.php";
    include '../hbfd/database_connect.php';
    $link = link_db();
    $name = $_GET['name'];
    $sql = "SELECT * FROM student_help_all WHERE Name='$name'";
    $year_sql = "SELECT DISTINCT year FROM student_help_all WHERE name = '$name'";

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
    $options = "";
    $result = $link->query($year_sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $year = $row["year"];
            $options .= "<option value='$year'>$year</option>";
        }
    }

    $info_sql = "SELECT * FROM student_infohelp_all WHERE Name='$name'";
    $info_year_sql = "SELECT DISTINCT year FROM student_infohelp_all WHERE name = '$name'";

    $info_result = $link->query($info_sql);
    if ($info_result->num_rows > 0) {
        while ($info_row = $info_result->fetch_assoc()) {
            $info_help_1 = $info_row["help-1"];
            $info_help_2 = $info_row["help-2"];
            $info_help_3 = $info_row["help-3"];
            $info_help_4 = $info_row["help-4"];
            $info_help_5 = $info_row["help-5"];
        }
    }
    $info_options = "";
    $info_result = $link->query($info_year_sql);
    if ($info_result->num_rows > 0) {
        while ($info_row = $info_result->fetch_assoc()) {
            $info_year = $info_row["year"];
            $info_options .= "<option value='$info_year'>$info_year</option>";
        }
    }
    ?>
    <br>
    <h3 id="chartTitle"><?php echo $name; ?>的輔導服務項目時數分佈圖(<?php echo $year;?>)</h3>
    <select id="yearDropdown_1" onchange="loadChart1Data()">
        <?php echo $options; ?>
    </select>
    <canvas id="myChart" width="400" height="200"></canvas>
    
    <script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [],  // 標籤
            datasets: [{
                data: [],   // 資料
                label: '輔導服務項目時數',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    var selectedYear = document.getElementById('yearDropdown_1').value;
    var selectedName = '<?php echo $name; ?>';
    function loadChart1Data() {
        document.getElementById('chartTitle').textContent = `${selectedName}的輔導服務項目時數分佈圖(${selectedYear})`;

        fetch(`datasets_realhelps.php?name=${selectedName}&year=${selectedYear}`)
            .then(Response => Response.json())
            .then(data => {
                myChart.data.labels = data.labels;
                myChart.data.datasets[0].data = data.values;
                myChart.update();
            })
            .catch(error => {
                console.error('無法獲取數據:', error);
            });
    }
    loadChart1Data();
    document.getElementById('myChart').addEventListener('click', function(event) {
        console.log('Click event triggered');
        var activePoints = myChart.getElementsAtEventForMode(event, 'nearest', { intersect: true }, false);

        if (activePoints.length > 0) {
            // 獲取被點擊的資料點索引
            var clickedDatasetIndex = activePoints;
            var clickedDatasetIndex2 = activePoints[0];
            var clickedDataIndex = activePoints[0]._index;
            var clickedLabel = myChart.data.labels[clickedDataIndex];
            console.log('clickedDatasetIndex:', clickedDatasetIndex);
            console.log('clickedDatasetIndex2:', clickedDatasetIndex2);
            console.log('myChart:', myChart);
            console.log('myChart.data:', myChart.data);
            // 獲取資料值
            var clickedValue = myChart.data.datasets[0].data[0];
            console.log('clickedLabel:', clickedLabel);
            console.log('clickedValue:', clickedValue);

            // 做一些處理，只要資料值大於0就觸發跳轉到新的PHP頁面
            if (clickedValue > 0) {
                //window.location.href = 'your_php_page.php?name=' + encodeURIComponent(selectedName) + '&year=' + encodeURIComponent(selectedYear);
            }
        }
    });
    </script>
    <br>
    <h3 id="chartTitle2"><?php echo $name; ?>的行政服務項目時數分佈圖(<?php echo $info_year;?>)</h3>
    <select id="yearDropdown_2" onchange="loadChart2Data()">
        <?php echo $info_options; ?>
    </select>
    <canvas id="myChart2" width="400" height="200"></canvas>

    <script>
    var info_ctx = document.getElementById('myChart2').getContext('2d');
    var info_myChart = new Chart(info_ctx, {
        type: 'bar',
        data: {
            labels: [],  // 標籤
            datasets: [{
                data: [],   // 資料
                label: '行政服務項目時數',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    function loadChart2Data() {
        var info_selectedYear = document.getElementById('yearDropdown_2').value;
        var info_selectedName = '<?php echo $name; ?>';
        document.getElementById('chartTitle2').textContent = `${info_selectedName}的行政服務項目時數分佈圖(${info_selectedYear})`;

        fetch(`datasets_infohelps.php?name=${info_selectedName}&year=${info_selectedYear}`)
            .then(Response => Response.json())
            .then(data => {
                info_myChart.data.labels = data.labels;
                info_myChart.data.datasets[0].data = data.values;
                info_myChart.update();
            })
            .catch(error => {
                console.error('無法獲取數據:', error);
            });
    }

    // 第一次載入預設的資料
    loadChart2Data();
    document.getElementById('myChart2').addEventListener('click', function(event) {
        var activePoints = myChart.getElementsAtEventForMode(event, 'nearest', { intersect: true }, false);
        if (activePoints.length > 0) {
            // 獲取被點擊的資料點索引
            var clickedDatasetIndex = activePoints[0]._datasetIndex;
            var clickedDataIndex = activePoints[0]._index;

            // 獲取資料值
            var clickedValue = myChart.data.datasets[clickedDatasetIndex].data[clickedDataIndex];

            // 做一些處理，只要資料值大於0就觸發跳轉到新的PHP頁面
            if (clickedValue > 0) {
                window.location.href = 'your_php_page.php?name=' + encodeURIComponent(info_selectedName) + '&year=' + encodeURIComponent(info_selectedYear);
            }
        }
    });
    </script>
    <?php $link->close(); ?>
    <button onclick="window.location.href='../search/search.php'">返回查詢介面</button>
    <button onclick="window.location.href='add.php'">前往新增介面</button>
    <?php include "../hbfd/footer.php"; ?>
</div>
</body>