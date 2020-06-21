$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.dataCity').change (function() {
        var type = $(this).attr('data-type');
        var value  = $(this).val();
        $.ajax({
                url: 'loadCity',
                showLoading: 'true',
                method: 'GET',
                data: {
                    value: value
                },
                dataType: "json"
            }
        ).done(function (response) {
            var html = '';
            var data = response.data;
            $.each(data, function (index, value) {
                html += "<option value='"+value.maqh+"'>"+value.name_qh+"</option>"
            })
            $('#district').html('').append(html);

        });
    });


    $('.dataDistrict').change (function() {
        var value  = $(this).val();
        $.ajax({
                url: 'loadDistrict',
                showLoading: 'true',
                method: 'GET',
                data: {
                    value: value
                },
                dataType: "json"
            }
        ).done(function (response) {
            var html = '';
            var data = response.data;
            $.each(data, function (index, value) {
                html += "<option value='"+value.xaid+"'>"+value.name_xa+"</option>"
            })
            $('#commune').html('').append(html);

        });
    });

});
