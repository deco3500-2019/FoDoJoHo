<?php
    require "connectDatabase.php";
    session_start();

    $db = new MySQLDatabase();
    $db->connect();
    $lobbyID = $_POST["lobbyID"];

    $query = "SELECT * FROM lobby WHERE lobbyID= $lobbyID";
    $select = $db->query($query);

    $row = mysqli_fetch_array($select);
    $participants = $row['participants'];

    $participants = "'".$participants.", ".$_SESSION["name"]."'";

    echo $participants;

    $query = "UPDATE lobby SET participants = $participants WHERE lobbyID = $lobbyID";
    $insert = $db->query($query);

    $db->disconnect();
    header("Location: ../lobby.php");
?>