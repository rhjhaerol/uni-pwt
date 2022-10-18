$(document).ready(function() {

    $('#login-app').submit(function(event) {

        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();

        $.ajax({
            type: "POST",
            url: "api/login.php",
            data: {
                username: username,
                password: password
            },
            dataType: "json",
            encode: true,
        }).done(function(data) {
            $('#info-msg').html(data.message);

            if (data.success) {
                $(location).prop('href', 'destination.php');
            }

        }).fail(function(data) {
            $('#info-msg').html('Invalid username and/or password.');
        });

        event.preventDefault();
    });
});