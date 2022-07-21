$(document).ready(function(){



    //if next or previous btn was cliked
    $("#next, #previous").click(function(){

    let pageNumber = $("#page").val();
    let action = this.id;
    
    $.ajax({

        url: 'fetch.php',
        type: 'POST',
        data: {pageNumber:pageNumber, action:action},
        success: function(data){
            
            if(action == "next"){
                let val = parseInt(pageNumber) + 4;
                history.pushState("","","?page="+val);
            }

            if(action == "previous"){
                let val = parseInt(pageNumber) - 4;
                history.pushState("","","?page="+val);
            }

            $("#pagination").html(data);
            console.log(data);

        }

    });

});








//Handle Browser back button (or Mobile back Btn)
$(window).on("popstate", function(){
    
    let getUrl = location.href.split("=");
    let pageNumber = getUrl[1];

    if(typeof pageNumber === "undefined" || pageNumber < 1){
        pageNumber = 0;
    }

    let action = "popstate";
    
    $.ajax({
        url: 'fetch.php',
        type: 'POST',
        data: {pageNumber:pageNumber, action:action},
        success: function(data){
            
            $("#pagination").html(data);
            console.log(data);

        }

        });


    });




});

