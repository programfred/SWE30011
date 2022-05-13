<?php
include '../../model/connect.php';

$sql = mysqli_query($conn, "SELECT tblMember.memberID,tblMember.firstName,tblMember.lastName,tblMember.email,tblOrderLine.productCode,tblProduct.productName,SUM(tblOrderLine.quantity)  as 'TotalSaleQuantity' 
FROM tblOrderLine 
  LEFT JOIN tblProduct on tblOrderLine.productCode = tblProduct.productCode
  LEFT JOIN tblOrder on tblOrder.orderID = tblOrderLine.orderID    
  LEFT JOIN tblMember on tblMember.memberID = tblOrder.memberID                                                                                                           
WHERE DATE(tblOrder.orderDate) > (NOW() - INTERVAL 7 DAY)
                                  GROUP BY tblOrderLine.productCode ORDER BY SUM(tblOrderLine.quantity)  DESC
                                  ");

$rows = array();

while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);

?>