$(document).ready(function(){
    // Get ID 
    $(document).on('click',"#edit",function(){
        var updateDataID = $(this).attr('data-id');
        $("#containerFormUpdate").show();

        // Form Update
        $('#formUpdate').submit(function(e){
            e.preventDefault();
            var updateFirstName = $("#updateFirstName").val();
            var updateLastName = $("#updateLastName").val();
    
            $.ajax({
                url: './asset/php/main/editMF.php', // Backend Script
                type: 'POST', // Type POST 

                data: { 
                    updateDataID: updateDataID, // use $_POST["updateDataID"] on Backend to get the data of updateDataID
                    updateFirstName: updateFirstName, // use $_POST["updateFirstName"] on Backend to get the data of updateFirstName
                    updateLastName: updateLastName, // use $_POST["updateFirstName"] on Backend to get the data of updateFirstName
                },
                
                // Displaying the return message on Backend Script
                success: function (data){
                    console.log(data);
                }
            })
        });
        return false;
    });
});