<?php
include 'connect.php';
if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];

    // insert query
    $query = "INSERT INTO `fleet`(`first_name`, `middle_name`, `last_name`, `email`, `mobile_number`) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$mobile_number')";

    $result = mysqli_query($con, $query);
    if ($result) {
        echo "data inserted successfully";
    } else {
    die(mysqli_error($con));
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verse wears</title>
</head>
<body>
    <div class="container my-5">
        <form method="post>
        <div class="mb-4">
            <label class="form-label">First name</label>
            <input type="text" class="form-control"
            placeholder="Enter your First name"
            name="fname"autocomplete="off">
        </div> 
        <div class="mb-4">
            <label class="form-label">Middle name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your Middle name" 
            name="mname"autocomplete="off">
        </div>
        <div class="mb-4">
            <label class="form-label">Last name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your Last name"
            name="lname"autocomplete="off">
        </div>
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="Email" class="form-control" 
            placeholder="Enter your Email"
            name="email"
            autocomplete="off">
        </div>
        <div class="mb-4">
            <label class="form-label">Mobile number</label>
            <input type="mobile" class="form-control" 
            placeholder="Enter your Mobile number"
            name="mobile_number"autocomplete="off">
            </form>
        </div>
        <button class="btn btn-dark my-3"name=>submit</button> 
</body>
</html>