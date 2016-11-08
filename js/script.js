$(document).ready(function () {
    var form = $(this);
    var data = form.serialize();
    $("#form").submit(function () {
        $.ajax({
            type: 'POST',
            url: 'proc.php',
//            data: {form: $(this).val()},
            data: data,
            success: function (data) {
                if (data['error']) {
                    alert(data['error']);
                }else{
                    alert: ("всe прoшлo oк");
                }
            }
        });
    });
});