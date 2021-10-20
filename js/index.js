$(document).ready(function(){

    var $win = $(window);

    $win.scroll(function(){
         if ($win.scrollTop() == 0) {
             $(".navagation-scrolled").css("display", "none");
             $(".navagation").css("display", "flex");
         } else {
            $(".navagation-scrolled").css("display", "flex");
            $(".navagation").css("display", "none");
         }
    })



    $(document).on("click", ".openModalBlog", function() {
        let description = $(this).parent().parent().find(".blog-post-description").text()
        let name = $(this).parent().find("b").text()

        console.log(description)
        console.log(name)


        $(".modal-view-blog-post").css("display", "block")

        $("#setDesctipion").text(description)
        $("#setNamePost").text(name)

    })


    $(document).on("click", ".closeModalBlog", function(){
        $(".modal-view-blog-post").css("display", "none")

        
        $("#setDesctipion").empty()
        $("#setNamePost").empty()
    })


    $("#addReviewModal").click(function(){
        $(".modal-add-review").css("display", "block")
    })

    $("#closeModalAddReview").click(function() {
        $(".modal-add-review").css("display", "none")
    })


    $("#bookNowModal").click(function() {
        $(".modal-booking").css("display", "block")
    })

    $("#btnCloseModalBooking").click(function(){
        $(".modal-booking").css("display", "none")
    })

    $(document).on("keyup", ".personCount", function(){
        let price = 0;
        if($(this).val() <= 0) {
            $(".totalPriceBooking").val("")
        } else {
            price = parseFloat($(".priceCurrent").text())
            $(".totalPriceBooking").val( (price * parseFloat($(this).val())).toFixed(2) )
        }
       
    })

})