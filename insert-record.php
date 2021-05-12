<?php
header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorization,X-Requested-Width');
$data=json_decode(file_get_contents("php://input"),true);
$name=$data['sname'];
$email=$data['semail'];
$password=$data['spsw'];
$contact=$data['scont'];
include "db-connection.php";
$sql=" INSERT INTO data (name,email,password,contact) VALUES ('{$name}','{$email}','{$password}','{$contact}') ";
$result=mysqli_query($conn,$sql);
if($result){
    echo json_encode(array('message' => "Data Inserted", 'status' => true));

}else{
echo json_encode(array('message' => "Data not Inserted", 'status' => false));
}
?>