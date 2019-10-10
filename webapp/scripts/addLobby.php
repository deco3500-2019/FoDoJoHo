<script>
    <?php
    session_start();
    require 'connectDatabase.php';

    $db = new MySQLDatabase();
    $db->connect();
    $title = $_POST['title'];
    $number = $_POST['number'];
    $name = $_SESSION['name'];

    // query database for records
    $query = "INSERT INTO lobby (title, number, participants) VALUES ('$title' ,'$number' ,'$name')";
    $db->query($query);
    $db->disconnect();
    header("Location: ../lobby.php");
    ?>
</script>