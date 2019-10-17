<?php 
session_start();
require_once "scripts/connectDatabase.php";
$db = new MySQLDatabase();
$db->connect();

    $profile_name = $_COOKIE["username"];
        // $query = "SELECT * FROM users WHERE email = '$email'";
        // $result = $conn->query($query);

    $query = "SELECT * FROM participant_details WHERE name = '$profile_name' ";
    $select = $db->query($query);
    $row = mysqli_fetch_array($select);

    setcookie("userid", $row['participantID'], time() + 60*60*24, "/");




        /*while($row = mysqli_fetch_array($result)) {
            print "Name: {$row['username']} has ID: {$row['userId']}";
        }*/
        
    
    
  



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
    
        <?php include "nav.php"?>

        <div class="content">

            <h4>Profile</h4>
            <hr>
            <div class="profile">
                <H2><?php echo $row["name"]?></H2>
                <H2><?php echo $row["age"]?></H2>
                <H2><?php echo $row["city"]?></H2>
                
            </div>

        </div>
      
        <?php include "footer.php"?>
    </div>
   
    
    
    </body>
</html>


