$(document).ready(function() {

    function validateImg(data) {
        var ext = data.split(".");
        ext = ext[ext.length-1].toLowerCase();
        var arrayExtension = ["jpg", "jpeg", "png", "jijf"];

        if(arrayExtension.lastIndexOf(ext) == -1) {
            return false;
        } else {
            return true;
        }
    }

    function validateAlphabeth(alph) {
        return /^[a-zA-Z ,]+$/.test(alph)
    }

    getAdventureImage.onchange = evt => {
        

        
        if(!$("#getAdventureImage").val()) {
            imgPreview.src = "../style/resources/no_imge.svg"
            $("#textImgPreview").text("No image to preview yet.")
            $("#validationFile").remove();
        } else {
            if(!validateImg($("#getAdventureImage").val())) {
                imgPreview.src = "../style/resources/no_imge.svg"
                $("#textImgPreview").text("No image to preview yet.")
                $("#validationFile").remove();
                $("#getAdventureImage").before("<p class='poppins fs-m text-danger text-center fw-bold' id='validationFile'>Invalid file format!</p>")
            } else {
                
                $("#validationFile").remove();
                const [file] = getAdventureImage.files
                if (file) {
                    imgPreview.src = URL.createObjectURL(file)
                    $("#textImgPreview").empty();
                }
        
            }
        }

        
       
    }

    $("form").submit(function(event){

        let countValidation = 0;

        let getAdventureImage = $("#getAdventureImage").val();
        if(!getAdventureImage) {
            $("#getAdventureImage").addClass("is-invalid")
        } else {
            $("#getAdventureImage").removeClass("is-invalid")
            countValidation++
        }


        let location_name = $("#getLocationName").val()
        if(location_name == "") {
            $("#getLocationName").addClass("is-invalid")
        } else {
            $("#getLocationName").removeClass("is-invalid")

            if(!validateAlphabeth(location_name)) {
                $("#getLocationName").addClass("is-invalid")
            } else {
                $("#getLocationName").removeClass("is-invalid")
                countValidation++
            }

        }


        let country = $("#getCountry").val()
        if(country == 0) {
            $("#getCountry").addClass("is-invalid")
        } else {
            $("#getCountry").removeClass("is-invalid")
            countValidation++
        }


        let travelOption = $("#getTravelOption").val()
        if(travelOption == 0) {
            $("#getTravelOption").addClass("is-invalid")
        } else {
            $("#getTravelOption").removeClass("is-invalid")
            countValidation++
        }
        

        let description = $("#getDescription").val()
        if(description == "") {
            $("#getDescription").addClass("is-invalid")
        } else {
            $("#getDescription").removeClass("is-invalid")
            countValidation++
        }


        let price = $("#getPrice").val()
        if(price == "") {
            $("#getPrice").addClass("is-invalid")
        } else {
            $("#getPrice").removeClass("is-invalid")
            countValidation++
        }

        console.log(countValidation)

        if(countValidation === 6 ) {
            $("form").unbind("submit");
            e.submit();
        } else {
            event.preventDefault();
        }

    })

})