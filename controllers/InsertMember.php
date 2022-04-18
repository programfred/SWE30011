<?php

// check connection
include '../model/connect.php';

$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$streetAddress = mysqli_real_escape_string($conn, $_POST['streetAddress']);
$suburb = mysqli_real_escape_string($conn, $_POST['suburb']);
$postcode = mysqli_real_escape_string($conn, $_POST['postcode']);

$insertMemberQuery = "INSERT INTO tblMember (
                    firstname,
                    lastname,
                    email,
                    mobile,
                    streetAddress,
                    suburb,
                    postcode) 
                VALUES (
                    '$firstname',
                    '$lastname',
                    '$email',
                    '$mobile',
                    '$streetAddress',
                    '$suburb',
                    '$postcode'
                )";


// execute add member query
$result = $conn->query($insertMemberQuery);

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