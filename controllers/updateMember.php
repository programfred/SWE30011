<?php

// check connection
include '../model/connect.php';

$memberID = mysqli_real_escape_string($conn, $_POST['memberID']);
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$streetAddress = mysqli_real_escape_string($conn, $_POST['streetAddress']);
$suburb = mysqli_real_escape_string($conn, $_POST['suburb']);
$postcode = mysqli_real_escape_string($conn, $_POST['postcode']);

$updateMemberQuery = "UPDATE tblMember 
                    SET
                    firstname = '$firstname',
                    lastname = '$lastname',
                    email = '$email',
                    mobile = '$mobile',
                    streetAddress = '$streetAddress',
                    suburb = '$suburb',
                    postcode = '$postcode' WHERE memberID = '$memberID'";


// execute add member query
$result = $conn->query($updateMemberQuery);

// check if inserted successfully
// if (!$result)
// {
//     echo "update in member table failed!" . $conn->error;
// }
// else
// {
//     // success
//     echo "successfully updated member";
// }

if (!$result)
{
    
    echo "<script>
    window.location.href='../index.php';
    alert('error editing a member!').conn->error;
    </script>";

}
else
{
    // success
    echo "<script>
    window.location.href='../index.php';
    alert('Member Updated!');
    </script>";
}

// close DB connection
$conn->close();

?>