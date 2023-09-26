<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation</title>
    <link rel="stylesheet" type="text/css" href="invite.css">
</head>
<body>  
    <div>      
    <?php
        $con = new mysqli('localhost', 'root', '', 'db_customer_survey');
        $sql = "SELECT * FROM tbl_form ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($con, $sql);

        if ($result) {
            // Fetch the row
            $row = mysqli_fetch_assoc($result);
        
            // Check if a row was returned
            if ($row) {
                // Access the values of the last record
                $id = $row['ID'];
                $firstName = $row['FirstName'];
                $lastName = $row['LastName'];
        
                // Output or use the retrieved values as needed
                echo "<div class='invited'>
                    <h1> 
                        <div class='id-invite'><span>ID: </span>". $id . "</div><br><div style='padding:10px;'></div>
                        <div><span>".$firstName."</span> <span>".$lastName. "</span> is invited!</div>
                    </h1><br>";
            } else {
                echo "No records found.";
            }
        } else {
            echo "Error executing the query: " . mysqli_error($connection);
        }
        
        // Close the database connection
        mysqli_close($con);
    ?>
    </div>
    <div class="btn-invite-back">
        <button class="btn-back" id="btn_back">Back</button>
    </div> 
    <script src="invite.js"></script>
</body>
</html>