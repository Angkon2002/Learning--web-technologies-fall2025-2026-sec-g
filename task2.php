<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<h3>1. Name Form</h3>
<?php
    if (isset($_POST['submit_name'])) {
        $name = $_POST['name'];

        
        if (empty($name)) {
            echo "Error: Name cannot be empty.<br>";
        }
        
        elseif (str_word_count($name) < 2) {
            echo "Error: Name must contain at least two words.<br>";
        }
        
        elseif ($name[0] < 'a' && $name[0] < 'A') { 
            
            echo "Error: Name must start with a letter.<br>";
        }
        
        elseif (!preg_match("/^[a-zA-Z\.\- ]*$/", $name)) {
            echo "Error: Only letters, period and dash allowed.<br>";
        }
        else {
            echo "<b>Success! Name is valid.</b><br>";
        }
    }
?>
<form method="post">
    Name: <input type="text" name="name">
    <input type="submit" name="submit_name" value="Submit">
</form>


<h3>2. Email Form</h3>
<?php
    if (isset($_POST['submit_email'])) {
        $email = $_POST['email'];

        
        if (empty($email)) {
            echo "Error: Email cannot be empty.<br>";
        }
        // Rule B: Check if valid email
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Error: Invalid email format.<br>";
        }
        else {
            echo "<b>Success! Email is valid.</b><br>";
        }
    }
?>
<form method="post">
    Email: <input type="text" name="email">
    <input type="submit" name="submit_email" value="Submit">
</form>



<h3>3. Date of Birth Form</h3>
<?php
    if (isset($_POST['submit_dob'])) {
        $dd = $_POST['dd'];
        $mm = $_POST['mm'];
        $yyyy = $_POST['yyyy'];

        
        if (empty($dd) || empty($mm) || empty($yyyy)) {
            echo "Error: All fields are required.<br>";
        }
        
        elseif ($dd < 1 || $dd > 31) {
            echo "Error: Day must be 1-31.<br>";
        }
        elseif ($mm < 1 || $mm > 12) {
            echo "Error: Month must be 1-12.<br>";
        }
        elseif ($yyyy < 1953 || $yyyy > 1998) {
            echo "Error: Year must be 1953-1998.<br>";
        }
        else {
            echo "<b>Success! Date is valid.</b><br>";
        }
    }
?>
<form method="post">
    DOB: 
    <input type="text" name="dd" size="2"> /
    <input type="text" name="mm" size="2"> /
    <input type="text" name="yyyy" size="4">
    <input type="submit" name="submit_dob" value="Submit">
</form>

</body>
</html>