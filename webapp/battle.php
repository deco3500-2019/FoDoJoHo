<?php
require 'scripts/connectDatabase.php';
session_start();

$db = new MySQLDatabase();
$db->connect();

$query = "SELECT * FROM lobby ";
$select = $db->query($query);

if ($select->num_rows > 0) {
    $event_details = $select;
} else {
    $event_details = null;
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


            <div class="input-group input-group-sm mb-3 searchbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Search</span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">


            </div>

            <hr>
            <p>Filters</p>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>

            <div class="lobbies">
                <table class="mt-3 table table-striped text-center">
                    <tr class="text-center">
                        <td id="id"><strong>ID</strong></td>
                        <td id="title"><strong>Title</strong></td>
                        <td id="number"><strong>No. of Participants </strong></td>

                    </tr>
                    <?php if ($event_details != null) : ?>
                        <?php while ($row = $event_details->fetch_array()) : ?>
                            <tr>
                                <input type="hidden" name="action" value="update">
                                <input type="hidden" name="id" value="<?php echo $row[""] ?>">
                                <td><input type="text" name="lobbyID" class="form-control-plaintext" value="<?php echo $row["lobbyID"] ?>"></td>
                                <td><input type="text" name="title" class="form-control-plaintext " value="<?php echo $row["title"] ?>"></td>
                                <td><input type="text" name="participants" class="form-control-plaintext " value="<?php echo $row["number"] ?>"></td>

                                <!-- <td><input type="date" name="date" class="form-control  " value="<?php echo $row["date"] ?>"></td>
                        <td><input type="time" name="time" class="form-control" value="<?php echo $row["time"] ?>"></td>
                        <td><input type="text" name="location" class="form-control" value="<?php echo $row["location"] ?>"></td>
                        <td><input type="text" name="description" class="form-control" value="<?php echo $row["description"] ?>"></td> 
                        <td> <textarea type="text" name="description" class="form-control" value=""><?php echo $row["description"] ?></textarea></td> -->





                                <!-- <td><input type="submit" class="btn btn-danger btn-sm"  name="delete_button" value="delete" /></td> -->


                            </tr>
                            </form>
                        <?php endwhile ?>
                    <?php endif ?>
                </table>




            </div>

        </div>

        <?php include "footer.php" ?>
    </div>

    <script src="scripts/addPopup.js" type="text/javascript"></script>



</body>

</html>