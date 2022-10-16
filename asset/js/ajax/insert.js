$(document).ready(function(){
    $('#formInsert').submit(function(e){
        e.preventDefault();

        var firstName = $("#firstName").val();
        var lastName = $("#lastName").val();

        $.ajax({
            url: './asset/php/main/insertMF.php', // Backend Script
            type: 'POST', // Type POST 
            data: { 
                    firstName: firstName, // use $_POST["firstName"] on Backend to get the data of firstName
                    lastName: lastName, // use $_POST["lastName"] on Backend to get the data of lastName
            },
            
            // Displaying the return message on Backend Script
            success: function (data){
                console.log(data);
            }
        })
    });
    return false;
});