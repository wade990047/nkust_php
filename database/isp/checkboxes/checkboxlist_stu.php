<?php
function needy1() {
    echo "<input type='checkbox' name='category1[]' id='needy1-1' value='true'>無需求<br>";
    echo "<input type='checkbox' name='category1[]' id='needy1-2' value='true'>從家裡至學校交通<br>";
    echo "<input type='checkbox' name='category1[]' id='needy1-3' value='true'>校內各地點的行動<br>";
    echo "<input type='checkbox' name='category1[]' id='needy1-4' value='true'>跨校區移動<br><br><br>";
    echo "<input type='checkbox' name='category1[]' id='needy1-5' value='true'>無障礙設施<br>(電梯、坡道、廁所等)<br>";
    echo "<input type='checkbox' name='category1[]' id='needy1-6' value='true'>其他";
}
function needy2() {
    echo "<input type='checkbox' name='category2[]' id='needy2-1' value='true'>無需求<br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-2' value='true'>三餐訂餐、取餐服務<br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-3' value='true'>使用宿舍環境<br><br><br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-4' value='true'>工讀資訊<br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-5' value='true'>獎助學金資訊<br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-6' value='true'>學校重要訊息<br>";
    echo "<input type='checkbox' name='category2[]' id='needy2-7' value='true'>其他";
}
function needy3() {
    echo "<input type='checkbox' name='category3[]' id='needy3-1' value='true'>無需求<br>";
    echo "<input type='checkbox' name='category3[]' id='needy3-2' value='true'>口語理解與表達<br>";
    echo "<input type='checkbox' name='category3[]' id='needy3-3' value='true'>文字理解與表達";
}
function needy4() {
    echo "<input type='checkbox' name='category4[]' id='needy4-1' value='true'>無需求<br>";
    echo "<input type='checkbox' name='category4[]' id='needy4-2' value='true'>醫療專業人員協助<br><br><br>";
    echo "<input type='checkbox' name='category4[]' id='needy4-3' value='true'>輔具借用<br>";
    echo "<input type='checkbox' name='category4[]' id='needy4-4' value='true'>特定空間借用<br>";
    echo "<input type='checkbox' name='category4[]' id='needy4-5' value='true'>特定器材借用<br>";
    echo "<input type='checkbox' name='category4[]' id='needy4-6' value='true'>其他";
}
function needy5() {
    echo "<input type='checkbox' name='category5[]' id='needy5-1' value='true'>無需求<br>";
    echo "<input type='checkbox' name='category5[]' id='needy5-2' value='true'>自我情緒管理<br>";
    echo "<input type='checkbox' name='category5[]' id='needy5-3' value='true'>人際關係<br>";
    echo "<input type='checkbox' name='category5[]' id='needy5-4' value='true'>環境適應<br>";
    echo "<input type='checkbox' name='category5[]' id='needy5-5' value='true'>外顯行為<br>";
    echo "<input type='checkbox' name='category5[]' id='needy5-6' value='true'>其他";
}
function needy6() {
    echo "<input type='checkbox' name='category6[]' id='needy6-1' value='true'>無需求<br>";
    echo "※基礎科目<br>";
    echo "<input type='checkbox' name='category6[]' id='needy6-2' value='true'>國文<br>";
    echo "<input type='checkbox' name='category6[]' id='needy6-3' value='true'>英文<br>";
    echo "<input type='checkbox' name='category6[]' id='needy6-4' value='true'>數學<br>";
    echo "<input type='checkbox'  name='category6[]'id='needy6-5' value='true'>體育<br>";
    echo "※專業必/選修<br>(各科系自行填寫)<br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-6'><br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-7'><br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-8'><br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-9'><br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-10'><br>";
    echo "※專業證照(畢業門檻)<br>(各科系自行填寫)<br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-11'><br>";
    echo "<input type='text' name='category6[]' class='custom-border' id='needy6-12'><br>";
    echo "<input type='checkbox' name='category6[]' id='needy6-13' value='true'>其他";
}
function help1() {
    echo "<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-1' value='true'>協助申請汽機車無障礙通行證<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-2' value='true'>協助申請電動輪椅<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-3' value='true'>協助申請交通補助費<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-4' value='true'>協助申請校車預約系統<br> (建工-第一-燕巢)<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-5' value='true'>協助無障礙設施<br>(電梯、坡道、廁所等)<br>";
    echo "<input type='checkbox' name='category1[]' id='help1-6' value='true'>其他<br>";
}
function help2() {
    echo "<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-1' value='true'>同儕協助三餐訂餐、取餐<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-2' value='true'>協助召開寢室小小座談會<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-3' value='true'>宿舍硬體設施調整、適應<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-4' value='true'>無障礙寢室申請<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-5' value='true'>工讀資訊<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-6' value='true'>獎助學金資訊<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-7' value='true'>學務資訊重要通知<br>";
    echo "<input type='checkbox' name='category2[]' id='help2-8' value='true'>其他";
}
function help3() {
    echo "<br>";
    echo "<input type='checkbox' name='category3[]' id='help3-1' value='true'>提供語音轉錄的溝通輔具<br>";
    echo "<input type='checkbox' name='category3[]' id='help3-2' value='true'>提供文字轉換語音輔具";
}
function help4() {
    echo "<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-1' value='true'>校內護理師諮詢<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-2' value='true'>校內護理師諮詢<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-3' value='true'>校外物理、職能治療諮詢<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-4' value='true'>聽力/視力/肢體障礙輔具借用<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-5' value='true'>特定空間借用<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-6' value='true'>特定器材借用<br>";
    echo "<input type='checkbox' name='category4[]' id='help4-7' value='true'>其他";
}
function help5() {
    echo "<br>";
    echo "<input type='checkbox' name='category5[]' id='help5-1' value='true'>個別心理諮商<br>";
    echo "<input type='checkbox' name='category5[]' id='help5-2' value='true'>團體心理輔導<br>";
    echo "<input type='checkbox' name='category5[]' id='help5-3' value='true'>社交技巧課程<br>";
    echo "<br>";
    echo "<input type='checkbox' name='category5[]' id='help5-6' value='true'>其他";
}
function help6() {
    echo "<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-1' value='true'>不願意知會授課講師<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-2' value='true'>協助知會授課講師自身障別概況<br>";
    echo "1.<input type='text' name='category6[]' class='custom-border' id='help6-2-1'>2.<input type='text' name='category6[]' class='custom-border' id='help6-2-2'><br>";
    echo "3.<input type='text' name='category6[]' class='custom-border' id='help6-2-3'>4.<input type='text' name='category6[]' class='custom-border' id='help6-2-4'><br>";
    echo "<input type='checkbox' name='category6[]' id='help6-3' value='true'>體育適應課程<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-4' value='true'>課業輔導<br>";
    echo "1.<input type='text' name='category6[]' class='custom-border' id='help6-4-1'>2.<input type='text' name='category6[]' class='custom-border' id='help6-4-2'><br>";
    echo "3.<input type='text' name='category6[]' class='custom-border' id='help6-4-3'>4.<input type='text' name='category6[]' class='custom-border' id='help6-4-4'><br>";
    echo "<input type='checkbox' name='category6[]' id='help6-5' value='true'>彈性調整評量方式<br>";
    echo "1.<input type='text' name='category6[]' class='custom-border' id='help6-5-1'>2.<input type='text' name='category6[]' class='custom-border' id='help6-5-2'><br>";
    echo "3.<input type='text' name='category6[]' class='custom-border' id='help6-5-3'>4.<input type='text' name='category6[]' class='custom-border' id='help6-5-4'><br>";
    echo "<input type='checkbox' name='category6[]' id='help6-6' value='true'>學習輔具借用<br>";
    echo "1.<input type='text' name='category6[]' class='custom-border' id='help6-6-1'>2.<input type='text' name='category6[]' class='custom-border' id='help6-6-2'><br>";
    echo "<input type='checkbox' name='category6[]' id='help6-7' value='true'>學伴協助<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-8' value='true'>協調筆記借閱/影印<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-9' value='true'>講義/課本放大或轉譯<br>";
    echo "<input type='checkbox' name='category6[]' id='help6-10' value='true'>其他";
}
?>