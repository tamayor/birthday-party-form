<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Party Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
        <div class="birthdayPartySurveyForm" id="birthdayParty_SurveyForm">
            <h1>Birthday Party Registration</h1>
            <div>
            <form autocomplete="off" action="form.php" method="post">
                <div class="form-div">
                    <label >First Name</label>
                    <input class="first-name"  type="text" name="firstname" placeholder="first name" required>
                </div>
                <div class="form-div">
                    <label>Last Name</label>
                    <input class="last-name"  type="text" name="lastname" placeholder="last name" required>
                </div>
                <div class="form-div">
                    <label>Address</label>
                    <input class="address"  type="text" name="address" placeholder="address" required>
                </div>
                <div class="form-div">
                    <label>Age</label>
                    <input class="age"  type="number" name="age" placeholder="age">
                </div>
                <div class="form-div">
                    <label>Contact Number</label>
                    <input class="contact-number"  type="number" name="contactnumber" placeholder="contact number">
                </div>
                <div class="form-div">
                    <label>Email</label>
                    <input class="email"  type="text" name="email" placeholder="email">
                </div>
                <div class="form-div">
                    <label>Relationship</label>
                    <select name="relationship">
                        <option value="relative">Relative</option>
                        <option value="classmate">Classmate</option>
                        <option value="friend">Friend</option>
                        <option value="acquaintance">Acquaintance</option>
                        <option value="colleague">Colleague</option>
                    </select>
                </div>
                <div class="form-div">
                    <label>Dietary Restriction</label>
                    <select name="dietaryrestriction">
                        <option value="none">None</option>                      
                        <option value="veganism">Veganism</option>
                        <option value="vegetarianism">Vegetarianism</option>
                        <option value="pescetarianism">Pescetarianism</option>
                        <option value="halal">Halal</option>
                        <option value="ketogenic">Ketogenic Diet</option>
                        <option value="lowsodium">Low Sodium Diet</option>
                        <option value="raw">Raw Foodism</option>
                        <option value="lowcarbohydrate">Low Carbohydrate Diet</option>
                        <option value="paleo">Paleo</option>
                        <option value="foodallergies" >Food Allergies</option>
                    </select>
                </div>
                <div class="form-div">  
                    <label>*Enter Secret Code*</label> <input onblur="seeYou()" id="secret_code" type="password" required="" oninvalid="this.setCustomValidity('Enter the Secret Code')" placeholder="my nickname">
                </div>
                <div class="form-submit">
                    <button disabled id="submit_form" type="submit" name="submit_button" class="submit-form">Submit</button>
                </div>
                <div>
                    <h1 id="fu" style="display: none;">Sorry, I don't know you.</h1>
                    <h1     id="cu" style="display: none;">Excited to See You at 5th of June</h1>
                </div>
            </form> 
        </div>
        <div>
                <div id="invited">
                    <?php
                        session_start();
                        // Check if the status message exists in the session
                        if (isset($_SESSION['status'])) {
                            echo "<p class='php-message' >" . $_SESSION['status'] . "</p>";
                            unset($_SESSION['status']); // Remove the status message from the session
                            echo "<meta http-equiv='refresh' content='3'>"; // Auto refresh after 3 seconds
                        }        

                        // Check if there's an error message in the session
                        if (isset($_SESSION['error_message'])) {
                            echo "<p>Error: " . $_SESSION['error_message'] . "</p>";
                            unset($_SESSION['error_message']); // Remove the error message from the session
                        }          
                    ?>
                </div>
        </div>
        <script src="index.js"></script>
</body>
</html>