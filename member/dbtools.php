<?php
function create_connect(){
    $link = mysqli_connect("localhost","id19728256_owner","Aa@123456789")  or die("連線失敗".mysqli_connect_error());
    mysqli_query($link, "SET NAMES utf8");

    // $link = mysqli_connect("localhost","admin","123456") 
    // or die("連線失敗".mysqli_connect_error());
    
     return $link;
     
}
function execute_sql($link, $dbname, $sql){

    mysqli_select_db($link,$dbname)
    or die("連線資料庫失敗".mysqli_error($link));
    
    $result = mysqli_query($link, $sql);

    return $result;
}
?>