<?php
require_once "scripts/connectDatabase.php";
$db = new MySQLDatabase();
$db->connect();

if (isset($_POST["username"]) && isset($_POST["age"]) && isset($_POST["city"])) {

    $username = $_POST["username"];
    $age = $_POST["age"];
    $city = $_POST["city"];
       

    $query = " INSERT INTO participant_details (name, age, city) VALUES ('$username','$age','$city')";
    $select = $db->query($query);
    
    setcookie("username", $username, time() + 60*60*24, "/");
    $_SESSION["username"] = $username;
    
                
    header("Location: profile.php");
        
            
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BHBR</title>

    <link href="styles/style.css" type="text/css" rel="stylesheet" />
    <link href="styles/jumbotron-narrow.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="home">
        <?php include "nav.php" ?>

        <div class="name">
            <form class="text-center border border-light p-5" action="#" method="POST">

                <h4>Woops! Looks like you're not an user yet </h4>
                <h5>Please fill in your details below</h5>

                <!-- enter name for checking -->
                <input class="form-control form-control-lg" type="text" name="username" placeholder="Your prefered name">
                <input class="form-control form-control-lg" type="number" name="age" placeholder="Your age">
                <input class="form-control form-control-lg" type="text" name="city" placeholder="your city">

                <button class="btn btn-info btn-block my-4" type="submit" >Next</button>

            </form>
        </div>

    </div>
</body>

</html>