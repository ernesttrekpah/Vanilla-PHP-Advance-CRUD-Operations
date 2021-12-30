$(document).ready(function () {  
 //Add users
 $(document).on("submit", "#addForm", function(e){
     e.preventDefault();

    //  Ajax logic
    $.ajax({
        url:"/phpadvancecrud/add.php",
        type:"POST",
        dataType:"json",
        data:new FormData(this),
        processData:false,
        contentType:false,
        beforeSend:function(){
            console.log("Data is loading...");
        },
        success:function(response){
            if(response){
                $("#userModal").modal("hide");
                $("#addForm")[0].reset();
            }
        },
        error: function(request,error){
            console.log(arguments);
            console.log("Error"+ error);
        },

    });
 });

});