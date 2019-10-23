<?php
require 'scripts/connectDatabase.php';
session_start();

$db = new MySQLDatabase();


$name = $_COOKIE["username"];

$title = $interval = $description = $limit = $duration =  "";
$title_err = $interval_err = $description_err = $limit_err = $duration_err =  "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate names 
    if (empty($_POST["title"])) {
        $title_err = "Please the name of the event";
    } else {
        $title =  $_POST["title"];
    }

    if (empty($_POST["interval"])) {
        $interval_err = "Please enter the frequency";
    } else {
        $interval = $_POST["interval"];
    }

    if (empty($_POST["limit"])) {
        $limit_err = "Please enter the limit";
    } else {
        $limit = $_POST["limit"];
    }

    if (empty($_POST["duration"])) {
        $duration_err = "Please enter the location";
    } else {
        $duration = $_POST["duration"];
    }

    if (empty($_POST["description"])) {
        $description_err = "Please enter a description";
    } else {
        $description = $_POST["description"];
    }


    if (empty($title_err) && empty($interval_err) && empty($limit_err) && empty($duration_err) && empty($description_err)) {

        $db->connect();

        // query database for records
        $query = "INSERT INTO lobby (title, number, check_in_interval, duration, description, creator) VALUES ('$title' ,'$limit','$interval','$duration','$description' ,'$name')";
        $db->query($query);
        $db->disconnect();
        header("Location: battle.php");
    }
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


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="styles/style.css" type="text/css" rel="stylesheet" />
    <!-- <link href="styles/jumbotron-narrow.css" rel="stylesheet"> -->
</head>

<body>

    <div id="container">

        <?php include "nav.php" ?>

        <div class="content">

            <div id="addLobby">


                <form action="#" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Battle Title</label>
                        <input name="title" type="text" class="form-control" placeholder="title">
                        <span class="help-block"><?php echo $title_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Check in Frequency</label>
                        <input name="interval" type="number" class="form-control" placeholder="no. of days">
                        <span class="help-block"><?php echo $interval_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Player limit</label>
                        <input name="limit" type="number" class="form-control" placeholder="Max number of players">
                        <span class="help-block"><?php echo $limit_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Battle Length</label>
                        <input name="duration" type="number" class="form-control" placeholder="no. of weeks">
                        <span class="help-block"><?php echo $duration_err; ?></span>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <span class="help-block"><?php echo $description_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="next">
                    </div>

                </form>
            </div>

        </div>

        <?php include "footer.php" ?>
    </div>

   



</body>

</html>