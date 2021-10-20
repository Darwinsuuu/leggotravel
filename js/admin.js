$(document).ready(function(){
    
    $("#btnModalAddAdventure").click(function(){
        $(".modal-insert-adventure").css("display", "block")
        
    })

    $("#btnModalClose").click(function(){
        $(".modal-insert-adventure").css("display", "none")
    })


    $("#myAlertClose").click(function(){
        $("#myAlert").hide('fade')
    })


    $("#getPromo").keyup(function(){

        if($("#getPrice").val) {

            let total = 0;
            let temp = parseFloat($("#getPrice").val()) * (parseFloat($("#getPromo").val()) / 100.00)
            total = parseFloat($("#getPrice").val()) - temp
            $("#totalPrice").val(total)
        }

    })


    
    $(".getAccomodation").change(function(){
        
        if(this.checked) {
            $(this).parent().find(".setAccomodation").val("yes")
        } else {
            $(this).parent().find(".setAccomodation").val("no")
        }

    })

    $(".getFoodDrinks").change(function(){
        
        if(this.checked) {
            $(this).parent().find(".setFoodDrinks").val("yes")
        } else {
            $(this).parent().find(".setFoodDrinks").val("no")
        }

    })

    $(".getTourGuide").change(function(){
        
        if(this.checked) {
            $(this).parent().find(".setTourGuide").val("yes")
        } else {
            $(this).parent().find(".setTourGuide").val("no")
        }

    })


})