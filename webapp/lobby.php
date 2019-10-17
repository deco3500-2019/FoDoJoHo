<?php
    session_start();

    
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link href="styles/addPopup.css" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"> 
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body>
    <div id="addLobbyForm" style="display: none;"> 
 	    <div id="lobbyFormatting">
            <div class="row">
  	 	        <div class="col-9">
                </div>
                <div class="col-2" id="popupClose"> 
                    <p> Close </p>
                </div>
            </div>
            <form action="scripts/addLobby.php" method="POST">
            <p> 
                Lobby Title: 
                <input type="text" name="title" required>
            </p>
            <p> 
                Max Players: 
                <input type="number" name="number" value="16" required>
            </p>
            <button type="submit">Create Lobby</button>
            </form>
 	    </div>
    </div>
        <div class="container" id="lobbyContent">
            <button id="showAddPopup"> 
                Add
            </button>
        </div>
    </body>
<?php 
include 'scripts/lobbyLoader.php'
?>
    
    <script src="scripts/addPopup.js" type="text/javascript"></script>
    
</html>
