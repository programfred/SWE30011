<?php

// check connection
include '../model/connect.php';

$memberID = mysqli_real_escape_string($conn, $_POST['member_id']);
$values = $_POST['values']; 
// $values posts all the products that have a quantity, in the array format {productCode1, quantity1, productCode2, quantity2} etc..
// or you can get the post value from each input field, the field names are the product codes, 


// close DB connection
$conn->close();

?>