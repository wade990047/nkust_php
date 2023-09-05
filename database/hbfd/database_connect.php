<?php
function link_db()
{
    $servername = "127.0.0.1";
    $username = "root";
    $password = "rootroot";
    $dbname = "nkust_tsmc";
    $link = new mysqli($servername,$username,$password,$dbname);
    if ($link->connect_error) {
        die('無法連上資料庫：' . $link->connect_error);
    }
    $link->set_charset("utf8");
    return $link;
}
?>
