<?php

// check connection
include '../model/connect.php';

$memberID = mysqli_real_escape_string($conn, $_POST['member_id']);
$values = $_POST['member_id'];

echo "<pre>";
//var_dump($productItems);
//var_dump($_POST);
echo "</pre>";
// $values posts all the products that have a quantity, in the array format {productCode1, quantity1, productCode2, quantity2} etc..
// or you can get the post value from each input field, the field names are the product codes,



$sql = "INSERT INTO tblOrder (memberID, orderDate)
VALUES ($memberID, now())";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
    $tmpSql="INSERT INTO tblOrderLine (orderID, productCode, quantity) VALUES";
    for ($x = 1; $x < count($_POST)-1; $x++) {
       $quantity = 0;
       if (empty($_POST[$x])){
           continue;
       }

       $tmpSql .= "({$last_id}, {$x}, {$_POST[$x]}),";



    //    if ($x != count($_POST)-2){

    //    } else {
    //     $tmpSql .= "({$last_id}, {$x}, {$_POST[$x]});";
    //    }
    }
    $tmpSql = substr($tmpSql, 0, -1);
    $tmpSql .= ";";
    echo "<br><br>" . $tmpSql . "<br><br>";

    if ($conn->multi_query($tmpSql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else{
    echo $conn->error;
}

// close DB connection
$conn->close();

