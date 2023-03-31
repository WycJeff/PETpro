<?php
require_once("dbtools.php");

$conn = create_connect();

$sql ="SELECT * FROM room ORDER BY ID DESC";

$result = execute_sql($conn,"id19728256_petdb", $sql);

if(mysqli_num_rows($result)>0){
    $mydata = array();
    while($row = mysqli_fetch_assoc($result)){
    $mydata[] = $row;//2維陣列
    }
    echo '{"state":true,"message":"讀取資料成功", "data":'.json_encode($mydata).'}';
}else{
    echo '{"state":false,"message":"讀取資料失敗或查無資料"}';
}

mysqli_close($conn);
?>