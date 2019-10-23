<?php
require 'scripts/connectDatabase.php';
session_start();

$db = new MySQLDatabase();
$db->connect();

$lobbyID = $_COOKIE["royaleID"];

$query = "SELECT * FROM lobby WHERE lobbyID = '$lobbyID' ";
$select = $db->query($query);
$select = $db->query($query);
$row = mysqli_fetch_array($select);


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

            <h4>Join Battle</h4>
            <hr>
            <div id="joining">
                <H5>You will be Joining:</H5>
                <button type="button" class="btn btn-lg btn-outline-success"><?php echo $row["title"] ?></button>

                <table class=" join_details mt-3 table table-striped text-center">
                    <tr class="text-center">
                        <td id="player_limit"><strong><?php echo $row["number"] ?></strong> Players</td>
                        <td id="check_in"><strong><?php echo $row["check_in_interval"] ?></strong>d. Check-in</td>
                        <td id="length"><strong><?php echo $row["duration"] ?> </strong>w. Length</td>

                    </tr>

                </table>
                <p>Description</p>
                <textarea name="" id="" cols="20" rows="10"><?php echo $row["description"] ?></textarea>
            </div>
            <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="next">
                    </div>

        </div>

        <?php include "footer.php" ?>






</body>

</html>