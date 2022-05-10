<?php
include '../../model/connect.php';

$resultAll = mysqli_query($conn, "SELECT tblOrderLine.productCode,tblProduct.productName,SUM(tblOrderLine.quantity)  as 'TotalSaleQuantity' FROM tblOrderLine 
  LEFT JOIN tblProduct on tblOrderLine.productCode = tblProduct.productCode
   LEFT JOIN tblOrder on tblOrder.orderID = tblOrderLine.orderID                                                                                                       
WHERE DATE(tblOrder.orderDate) > (NOW() - INTERVAL 7 DAY)
                                  GROUP BY tblOrderLine.productCode ORDER BY SUM(tblOrderLine.quantity)  DESC
                                  ");

$rows = array();

if(!$resultAll){
    die(mysqli_error($conn));
}

while($r = mysqli_fetch_assoc($resultAll)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);

?>