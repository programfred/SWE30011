<?php

include_once('connect.php');

$tblMember = "CREATE TABLE IF NOT EXISTS tblMember (
        memberID INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(30),
        lastName VARCHAR(30),
        email VARCHAR(50),
        mobile VARCHAR(10),
        streetAddress VARCHAR(40),
        suburb VARCHAR(30),
        postcode VARCHAR(4)
        )";

$tblProduct = "CREATE TABLE IF NOT EXISTS tblProduct (
        productCode INT AUTO_INCREMENT PRIMARY KEY,
        productName VARCHAR(40),
        productDescription VARCHAR(150),
        category VARCHAR(20),
        price DECIMAL(5,2)
        )";

$tblOrder = "CREATE TABLE IF NOT EXISTS tblOrder (
        orderID INT AUTO_INCREMENT PRIMARY KEY,
        memberID INT,
        orderDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        FOREIGN KEY (memberID) REFERENCES tblMember(memberID)
        )";

$tblOrderLine = "CREATE TABLE IF NOT EXISTS tblOrderLine (
        lineID INT AUTO_INCREMENT PRIMARY KEY,
        orderID INT,
        productCode INT,
        quantity INT,
        FOREIGN KEY (orderID) REFERENCES tblOrder(orderID),
        FOREIGN KEY (productCode) REFERENCES tblProduct(productCode)
        )";


$conn->query($tblMember);
$conn->query($tblProduct);
$conn->query($tblOrder);
$conn->query($tblOrderLine);


$conn->close();

?>