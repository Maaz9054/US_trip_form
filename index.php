<?php
$insert = false;
if (isset($_POST['name'])) {

    // set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // create a database connection
    $conn = mysqli_connect($server, $username, $password);

    // check for connection success
    if (!$conn) {
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connection to db";

    // collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $decs = $_POST['decs'];

    $sql = " INSERT INTO `ustrip` .`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', ' $decs', current_timestamp());";

    // echo $sql;

    // execute the query 
    if ($conn->query($sql) == true) {
        // echo "Successfully Inserted";

        // flag for successfull insertion
        $insert = true;
    } else {
        echo "ERROR : $sql <br> $conn->error";
    }

    // close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome To Travel Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <img class="bg" src="bg1.jpg" alt="IIT" />
    <div class="container">
        <h1>Welcome to IIT Delhi US form</h1>
        <p>
            Enter your details and submit your form to comfirm your participation in
            the trip.
        </p>

        <?php
        if ($insert == true) {
            echo  "<p class = 'p2'> Thanks for submitting your form. We are happy to see you joining with us for the US trip.</p>";
        }
        ?>


        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name" />
            <input type="text" name="age" id="age" placeholder="Enter Your Age" />
            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender" />
            <input type="email" name="email" id="email" placeholder="Enter Your email" />
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone" />
            <textarea name="decs" id="decs" cols="30" rows="10" placeholder="Enter Any Other Information"></textarea>
            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>

    <script src="index.js"></script>

</body>

</html>