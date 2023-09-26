
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Role</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div  class="event-role-title" >
        <h1 id="event_role_header" class="event-role-header">Select Your Role</h1>
        <div class="event-role" >
            <div class="organizer-section">
                <button id="organizer" class="organizer">
                    Organizer
                </button>
                <div class="organizer-verification" id="organizer_verification"  style="display: none;">
                    <div class = "username" >
                        <span class="org">username</span>
                        <input class="org" placeholder=""  id = "organizer_username" >
                    </div>
                    <div class = "password">
                        <span class="org">password</span>
                        <input class="org" placeholder="" type="password" id = "organizer_password">
                    </div>
                    <div class="org">
                        <button class="login org" id="login"> Log In </button>
                    </div>
                </div>
            </div>
            <div id="guest_section">
                <button id="guest" class="guest">
                    Guest
                </button> 
            </div>
        </div>
    </div>
    <div>
            <h1 id="database_access_denied" style="display:none;">ACCESS DENIED</h1>
    </div>
    <div >
        <div class = 'backToMainPage' id= 'backToMainPage' style="display:none;" >
                <button id="back_to_main_page" class="back-to-main-page">Back to Main Page</button>
        </div>
        <br>    
        <div style="display:none;"  class="database-list" id="database_list">
            <table class="data-table">
                    <tr>
                        <th>ID</th>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>HomeAddress</th>
                        <th>Age</th>
                        <th>ContactNumber</th>
                        <th>Email</th>
                        <th>Relationship</th>
                        <th>DietaryRestriction</th>
                    </tr>
                <?php
                    $con = new mysqli('localhost', 'root', '', 'db_customer_survey');
                    if ($con -> connect_error){
                        die ("Connection Failed". $con -> connect_error);
                    }
                    $sql = "SELECT id,FirstName,LastName,HomeAddress,Age,
                            ContactNumber,Email,Relationship,DietaryRestriction FROM tbl_form";
                    $result = $con -> query($sql);

                    if ($result -> num_rows > 0){
                        while ($row = $result -> fetch_assoc()){
                            echo "<tr><td>".$row["id"]."</td><td>"
                                        .$row["FirstName"]."</td><td>"
                                        .$row["LastName"]."</td><td>"
                                        .$row["HomeAddress"]."</td><td>"
                                        .$row["Age"]."</td><td>"
                                        .$row["ContactNumber"]."</td><td>"
                                        .$row["Email"]."</td><td>"
                                        .$row["Relationship"]."</td><td>"
                                        .$row["DietaryRestriction"]
                                        ."</td><tr>";
                        }
                        echo "</table>";
                    }else{
                        echo "0 result";
                    }
                    $con -> close();
                ?>
        </div>
        
    </div>
    <script src="index.js"></script>
</body>
</html>
