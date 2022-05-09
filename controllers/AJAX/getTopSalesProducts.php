<?php
include '../../model/connect.php';

$sql = mysqli_query($conn, "SELECT tblOrderLine.productCode,tblProduct.productName,SUM(tblOrderLine.quantity)  as 'TotalSaleQuantity' FROM tblOrderLine 
  LEFT JOIN tblProduct on tblOrderLine.productCode = tblProduct.productCode
                                  GROUP BY tblOrderLine.productCode ORDER BY SUM(tblOrderLine.quantity)  DESC
                                  ");

$rows = array();

while($r = mysqli_fetch_assoc($sql)) {
    $rows[] = $r;
}

header('Content-Type: application/json');

echo json_encode($rows);

?>