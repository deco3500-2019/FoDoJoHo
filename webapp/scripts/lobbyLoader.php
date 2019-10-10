<?php
    require 'connectDatabase.php';
?>
<script>
    <?php
        $db = new MySQLDatabase();
        $db->connect();

        // query database for records
        $query = "SELECT * FROM lobby ORDER BY lobbyID DESC";
        $select = $db->query($query);
        foreach ($select as $key) {
            $entry[] = array('lobbyID' => $key['lobbyID'], 'title' => $key['title'], 'number' => $key['number'], 'participants' => $key['participants'], 'active' => $key['active']);
        }

        $lobbies = json_encode($entry);

        $db->disconnect();

        echo "var lobbyInfo=$lobbies;\n";
    ?>

    var infoString;
    var playerString;
    var j = 1;

    for (var i in lobbyInfo) {
        var k = 0;
        var lobbyID = lobbyInfo[i].lobbyID;
        var title = lobbyInfo[i].title;
        var number = lobbyInfo[i].number;
        var participants = lobbyInfo[i].participants;
        var active = lobbyInfo[i].active;
        var participantsArray = participants.split(', ');

        
        // Style formatting goes in here
        infoString = 
            '<div class="row" id="entry' + j + '">' + 
                '<div class="col-sm">' +
                    '<p>' + title + '</p>' +
                '</div>' +
                '<div class="col=sm">' +
                    '<p>' + participantsArray.length + '/' + number + '</p>' +
                '</div>' +
            '</div>' +
            '<div id="entry' + j + 'Players" style="display: none;">' +
            '</div>';

        $('#lobbyContent').append(infoString);

        while (participantsArray.length > k) {

            var l = k + 1;
            playerString = 
                '<p> Player ' + l + ': ' +
                    participantsArray[k] +
                '</p>';

            $("#entry" + j + "Players").append(playerString);
            k++;
        }

        var actionString;

        if (number == participantsArray.length && active == 1) {
            actionString = '<p> Match Active </p>';
            $("#entry" + j + "Players").append(actionString);
        } else if (number == participantsArray.length || participantsArray.includes('<?php echo $_SESSION["name"] ?>') == true) {
            actionString = 
            '<form method="POST" action="scripts/start.php">' +
                '<input name="lobbyID" style="display: none" value="' + lobbyID + '"></input>' +
                '<button type="submit"> Start Match </button>' +
            '</form>';
            $("#entry" + j + "Players").append(actionString);
        } else {
            actionString = 
            '<form method="POST" action="scripts/join.php">' +
                '<input name="lobbyID" style="display: none" value="' + lobbyID + '"></input>' +
                '<button type="submit"> Join Match </button>' +
            '</form>';
            $("#entry" + j + "Players").append(actionString);
        }

        $("#entry" + j).click(function () {
            $header = $(this);
            $content = $header.next();
            $content.slideToggle(100, function () {
            });
        });

        j++;
    }
</script>