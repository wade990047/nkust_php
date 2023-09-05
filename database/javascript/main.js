function searchinputForm() {
    var input1 = document.getElementById("fname").value;
    var input2 = document.getElementById("fid").value;
    var input3 = document.getElementById("top10").value;

    if (input1 === "" && input2 === "" && input3 === "") {
        alert("請至少填寫一個輸入框");
        return false;
    }
}
function clockTick() {
    var currentTime = new Date(),
        month = (currentTime.getMonth() + 1 < 10 ? '0' : '') + (currentTime.getMonth() + 1),
        day = (currentTime.getDate() < 10 ? '0' : '') + currentTime.getDate(),
        year = currentTime.getFullYear(),
        hours = (currentTime.getHours() < 10 ? '0' : '') + currentTime.getHours(),
        minutes = (currentTime.getMinutes() < 10 ? '0' : '') + currentTime.getMinutes(),
        seconds = (currentTime.getSeconds() < 10 ? '0' : '') + currentTime.getSeconds(),
        text = (year + "/" + month + "/" + day + ' ' + hours + ':' + minutes + ':' + seconds);
    document.getElementById('date').innerHTML = text;
}
setInterval(clockTick, 1000);
function delete_db() {
    window.location.href = 'delete.php';
}