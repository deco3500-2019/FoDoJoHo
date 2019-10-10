$(document).ready(function () {

    $("#addLobbyForm").on('click', function (e) {
        if (e.target !== this)
            return;
        else {
            $(this).hide();
        }
    });

    $("#showAddPopup").on("click", function () {
        $("#addLobbyForm").fadeIn('slow');
    });
    $("#popupClose").on('click', function (e) {
        $('#addLobbyForm').fadeOut('slow');
    });
});