$(document).ready(function () {
    $("#save").click(function () {
        var name = $("#name").val();
        var description = $("#description").val();

        if (name === '') {
            $("#name").css("border", "1px red solid");
            return false;
        } else {
            $("#name").css("border", "1px green solid");
        }
        if (description === '') {
            $("#description").css("border", "1px red solid");
            return false;
        } else {
            $("#description").css("border", "1px green solid");
        }

    });
});
