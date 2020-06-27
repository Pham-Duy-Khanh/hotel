$(document).ready(function () {
    $("#saveHotel").click(function () {
        var hotelName = $("#hotelName").val();
        var matp = $("#matp").val();
        var district = $("#district").val();
        var commune = $("#commune").val();
        var dichvu = $("#dichvu").val();
        var adminId = $("#admin_id").val();
        var description = $("#description").val();
        var item_images = $("#item_images").val();

        if (hotelName === '') {
            $("#hotelName").css("border", "1px red solid");
        } else {
            $("#hotelName").css("border", "1px green solid");
        }

        if (matp === '') {
            $("#matp").css("border", "1px red solid");
        } else {
            $("#matp").css("border", "1px green solid");
        }

        if (district === '') {
            $("#district").css("border", "1px red solid");
        } else {
            $("#district").css("border", "1px green solid");
        }

        if (commune === '') {
            $("#commune").css("border", "1px red solid");
        } else {
            $("#commune").css("border", "1px green solid");
        }

        if (dichvu === '') {
            $("#dichvu").css("border", "1px red solid");
        } else {
            $("#dichvu").css("border", "1px green solid");
        }

        if (description === '') {
            $("#description").css("border", "1px red solid");
        } else {
            $("#description").css("border", "1px green solid");
        }

        if (item_images === '') {
            var myElem = document.getElementById('img').innerHTML;
            if (myElem === '') {
                $("#img").append("<p id='ted'>Vui lòng điền đầy đủ các thông tin</p>");
            }
        } else {
            $("#item_images").css("border", "1px green solid");
        }


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if (hotelName !== '' && matp !== '' && district !== '' && commune !== '' && dichvu !== '' && description !== '' && item_images !== '') {
            $.ajax({
                    url: 'addHotel',
                    showLoading: 'true',
                    data: {
                        "hotelName": hotelName,
                        "matp": matp,
                        "district": district,
                        "commune": commune,
                        "dichvu": dichvu,
                        "description": description,
                        "item_images": item_images,
                        "adminId": adminId
                    },
                    dataType: "json"
                }
            ).done(function (response) {
                if (response) {
                    var image = response.image;
                    var maxHotel = response.max;
                    $.ajax({
                            url: 'addImage',
                            showLoading: 'true',
                            data: {
                                "image": image,
                                "maxHotel": maxHotel,
                            },
                            dataType: "json"
                        }
                    ).done(function (response) {
                        if (response) {
                            window.location.href = "showAllHotel";
                        }
                    });
                }
            });
        } else {
            return false;
        }

    });
});
