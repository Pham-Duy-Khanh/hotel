$( document ).ready(function() {
    $( "#addAdmin" ).click(function() {
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

        $.ajax({
                url : 'addAdmin',
                showLoading: 'true',
                data: {
                    "firestname" : firestname,
                    "lastname" : lastname,
                    "email" : email,
                    "formRadioInput" : formRadioInput,
                    "pass" : pass
                },
                dataType: "json"
            }
        ).done(function (response) {
            var para = document.createElement("P");
            para.innerHTML = "Add admin success.";
            document.getElementById("myDIV").appendChild(para);
            $("#formInModal").hide();
            window.location.reload();

            // var appendString = '';
            // for (var i = 0; i < response.data.length; i++) {
            //     appendString += "<tr>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].admin_id + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].username + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].email + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].phone + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].address + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].birthday + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].gender + "</a>" +"</td>" +
            //         "<td>" + "<a class=\"btn-link\">" + response.data[i].status + "</a>" +"</td>" +
            //         "</tr>";
            //     appendString += "<td>"
            // }
            // $('tbody').empty().append(appendString);
            // $( "div" ).removeClass( "show modal-backdrop fade" )
        });

    });
});
