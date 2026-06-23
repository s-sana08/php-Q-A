<?php

try{
$db_name = "mysql:host=localhost;dbname=college";
$user_name="root";
$password="";

$conn = new PDO($db_name, $user_name, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
$sql = $conn->prepare("select * from tb_std");
$sql->execute();
$err = $sql->errorInfo();
if($err[1]){
    echo $sql->errorCode();
    echo $err[2];
}else{
    $rst= $sql->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($rst);
    echo "</pre>";
}

}catch(PDOException $e){
    echo $e->getMessage();

}

?>