<?php
include '../../model/connect.php';

$sql = mysqli_query($conn, "SELECT tblProduct.productCode, tblProduct.productName,SUM(tblOrderLine.quantity)  as 'Order Quantity' 
FROM tblOrderLine 
  LEFT JOIN tblProduct on tblOrderLine.productCode = tblProduct.productCode
  LEFT JOIN tblOrder on tblOrder.orderID = tblOrderLine.orderID                                                                                                             
WHERE DATE(tblOrder.orderDate) > (NOW() - INTERVAL 7 DAY) AND tblOrderLine.quantity > 0
                                  GROUP BY tblProduct.productCode ORDER BY SUM(tblOrderLine.quantity)  DESC
                                  ");

$rows = array();

while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);

?>