$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("button[name=reset]").on('click', function () {
        $("input").val('');
    })
    $("#new-product-form").on("submit", function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var self = this;

        $.ajax({
            'url': '/products/add',
            'method': 'POST',
            'data': data,
            success: function (output) {
                $("input").val('');
                $("#notification_error").html("Product added successfully!");
                product_table.ajax.reload();
            }, error: function (error) {
                console.log('error', error);
                var response = $.parseJSON(error.responseText);
                var errorMessage = '';
                $.each(response.message, function (key, value) {
                    errorMessage += value + '<br>';
                });
                $("#notification_error").html(errorMessage);
            }
        });
    })

    var product_table = $('#product_table').DataTable({
        ajax: {
            'url': '/products',
            'method': 'GET',
            dataSrc: function (result) {
                var response = result['inventory']
                var output = [];
                var j = 0;
                for (var i = 0; i < response.length; i++) {
                    output[i] = new Array();
                    output[i][0] = response[i].product_name;
                    output[i][1] = response[i].quantity;
                    output[i][2] = response[i].price;
                    output[i][3] = response[i].total_value;
                    output[i][4] = response[i].date_time;
                }
                return output;
            }
        }
    }).draw();
});