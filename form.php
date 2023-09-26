<?php
session_start();

$con = new mysqli('localhost', 'root', '', 'db_customer_survey');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit_button'])) {
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $HomeAddress = $_POST['address'];
    $Age = $_POST['age'];
    $ContactNumber = $_POST['contactnumber'];
    $Email = $_POST['email'];
    $Relationship = $_POST['relationship'];
    $DietaryRestriction = $_POST['dietaryrestriction'];

    $query = "INSERT INTO tbl_form(FirstName,LastName,HomeAddress,Age,ContactNumber,Email,Relationship,DietaryRestriction) 
                VALUES('$FirstName','$LastName','$HomeAddress','$Age','$ContactNumber','$Email','$Relationship','$DietaryRestriction')";
    $query_execute = mysqli_query($con, $query);

    if ($query_execute) {
        $_SESSION['status'] = "Inserted Successfully";
    } else {
        $_SESSION['status'] = "Not Inserted Successfully";
        echo "Error: " . mysqli_error($con); // Output the database error for debugging purposes
    }
}

/*
    if($query_execute){
        $_SESSION['status'] = "Inserted Successfully";
        header("Location : index.php");
    }else{
        $_SESSION['status'] = "Not Inserted Successfully";
        header("Location : index.php");
    }*/
    
header("Location: invite.php");
exit();
?>
