<?php
    $insert = false;
    if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
   

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database failed due to " . mysqli_connect_error());
    }
    // echo "Success connecting to the db <br>";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES 
    ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    if($con->query($sql)==true){
        // echo "Successfully inserted data into the database";
        $insert =true;
    }
    else{
        echo "Error:$sql <br> $con->error";
    }

    $con->close();
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3>Welcome to Kolkata</h3>
        <p>Enter Your Details</p>
        <?php
        if($insert == true){
            echo "<p>Thanks For Submitting the Form</p>";
        }
           
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
            <!-- <input type="text" name="class" id="class" placeholder="Enter Your Class"> -->
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <textarea name="desc" id="desc" placeholder="Enter Any Other Information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

