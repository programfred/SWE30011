<?php

// check connection
include '../database/connect.php';

$addMemberQuery = "INSERT INTO tblMember (
                    firstname,
                    lastname,
                    email,
                    mobile,
                    address,
                    suburb,
                    postcode)
                VALUES (
                    $firstname,
                    $lastname,
                    $email,
                    $mobile,
                    $address,
                    $suburb,
                    $postcode)";


// execute add member query
$result = $conn->query($addMemberQuery);

// check if inserted successfully
if (!$result)
{
    echo "insertion in member table failed!" . $conn->error;
}
else
{
    // success
    echo "successfully inserted new member";
}

// close DB connection
$conn->close();

?>