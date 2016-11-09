$(document).ready(function () {    
    $("#form").submit(function () {
        $.ajax({
            type: 'POST',
            url: 'proc.php',
            data: $(this).serialize(),
            success: function (data) {
                if (data['error']) {
                    alert(data['error']);
                }else{
                    alert("всe прoшлo oк");
                }
            }
        });
	return false;
    });
});