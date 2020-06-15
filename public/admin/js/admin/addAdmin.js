$(document).ready(function () {
    $("#addAdmin").click(function () {
        var firestname = $("#firestname").val();
        var lastname = $("#lastname").val();
        var email = $("#email").val();
        var formRadioInput = $(".form-radio-input").val();
        var pass = $("#pass").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if (firestname != '' && lastname != '' && email != '' && pass != '') {
            $.ajax({
                    url: 'addAdmin',
                    showLoading: 'true',
                    data: {
                        "firestname": firestname,
                        "lastname": lastname,
                        "email": email,
                        "formRadioInput": formRadioInput,
                        "pass": pass
                    },
                    dataType: "json"
                }
            ).done(function (response) {
                $("#formInModal").hide();
                $('#showText').append('Thêm Thành Công');
                setTimeout(function () {
                    document.location.reload(true);
                }, 1000);
            });
        } else {
            var myElem = document.getElementById('ted');
            if (myElem === null) {
                $("#text").append("<p id='ted'>Vui lòng điền đầy đủ các thông tin</p>");
            }
        }

    });
});
