$( document ).ready(function() {
    $( ".delete_customer" ).click(function() {
        var customerId = $(this).data('customerId');
        var fromKey = $("#token").val();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            url : 'deleteCustomer',
            showLoader: true,
            data: {
                "customerId" : customerId,
                "fromKey" : fromKey
            },
            dataType: "json"
            }
        ).done(function (response) {
            if (response == 1) {
                var element = document.getElementById("basicModal");
                element.classList.add("show");
                $("#basicModal").show();
                $(".show").show();
                $( "#okdelete" ).click(function() {
                    window.location.reload();
                });
            }
            $( ".close" ).click(function() {
                $("#basicModal").hide();
                window.location.reload();
            });
        });
    });
});
