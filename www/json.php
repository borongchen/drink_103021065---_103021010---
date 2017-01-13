<?php
include "mysql_connect.inc.php";

$data=array();
$q=mysqli_query($con,"select * from `drink`");
while ($row=mysqli_fetch_object($q)){
 $data[]=$row;
}
echo json_encode($data, JSON_UNESCAPED_UNICODE);
?>