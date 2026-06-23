<?php

try{
$db_name = "mysql:host=localhost;dbname=college";
$user_name="root";
$password="";

$conn = new PDO($db_name, $user_name, $password);
$conn->beginTransaction();


$sql1= $conn->prepare("insert into tb_std (name ,city, age) values(?,?,?)");
$sql2= $conn->prepare("update city set cstudent = cstudent + 1 where cname =?");

if(!$sql1->execute(["manny1","agra",21])){
    throw new Exception('record is not inserted');
}else{
    echo "record is inserted";
}
if(!$sql2->execute(["agra"])){
    throw new Exception('city table are not updated');
}else{
    echo "table is updated";
}

$conn->commit();

}catch(PDOException $e){
    $conn->rollBack();
    echo $e->getMessage();

}

?>