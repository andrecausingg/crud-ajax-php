$(document).ready(function(){
    $(document).on('click',"#delete",function(){
        var deleteDataID = $(this).attr('data-id');

        $.ajax({
            url: './asset/php/main/deleteMF.php', // Backend Script
            type: 'POST', // Type POST 

            data: { 
                deleteDataID: deleteDataID, // use $_POST["deleteDataID"] on Backend to get the data of deleteDataID
            },
            
            // Displaying the return message on Backend Script
            success: function (data){
                console.log(data);
            }
        })
    });
});