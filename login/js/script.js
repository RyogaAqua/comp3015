$(document).ready(function () 
{
    $("form").submit(function (e) {
        Let user = $('#user').val();
        Let pwd = $('#user').val();

        if (user == 'john@gmail.com' && pwd == "Secreto") {
            alert("Welcome!");
        } else {
            alert("User or Password incorrect");
        }
    });
})