$(document).ready(function(){


    function validateLetters(data) {
        return /^[a-zA-Z_ ]+$/.test(data);
    }


    function validateEmailAddress(data) {
        return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(data)
    }

    function validatePassword(data) {
        return /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/.test(data)
    }




    $("#getFirstName").keyup(function(){
        
        let fname = $("#getFirstName").val()

        if(!fname.trim()) {
            $("#getFirstName").addClass("is-invalid")
            $(this).parent().find("p").remove()
            $(this).parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $(this).parent().find("p").remove()
            $("#getFirstName").removeClass("is-invalid")
        
            if(!validateLetters(fname)) {
                $("#getFirstName").addClass("is-invalid")
                $(this).parent().find("p").remove()
                $(this).parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $(this).parent().find("p").remove()
                $("#getFirstName").removeClass("is-invalid")
                $("#getFirstName").addClass("is-valid")
            }
        }

    })



    $("#getMiddleName").keyup(function(){
        
        let mname = $("#getMiddleName").val()

        if(!mname.trim()) {
            $("#getMiddleName").addClass("is-invalid")
            $(this).parent().find("p").remove()
            $(this).parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $(this).parent().find("p").remove()
            $("#getMiddleName").removeClass("is-invalid")
        
            if(!validateLetters(mname)) {
                $("#getMiddleName").addClass("is-invalid")
                $(this).parent().find("p").remove()
                $(this).parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $(this).parent().find("p").remove()
                $("#getMiddleName").removeClass("is-invalid")
                $("#getMiddleName").addClass("is-valid")
            }
        }

    })



    $("#getLastName").keyup(function(){
        
        let lname = $("#getLastName").val()

        if(!lname.trim()) {
            $("#getLastName").addClass("is-invalid")
            $(this).parent().find("p").remove()
            $(this).parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $(this).parent().find("p").remove()
            $("#getLastName").removeClass("is-invalid")
        
            if(!validateLetters(lname)) {
                $("#getLastName").addClass("is-invalid")
                $(this).parent().find("p").remove()
                $(this).parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $(this).parent().find("p").remove()
                $("#getLastName").removeClass("is-invalid")
                $("#getLastName").addClass("is-valid")
            }
        }

    })


    $("#getEmail").keyup(function(){
        
        let email = $("#getEmail").val()


        if(!email) {
            $("#getEmail").addClass("is-invalid")
            $(this).parent().find("p").remove()
            $(this).parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $(this).parent().find("p").remove()
            $("#getEmail").removeClass("is-invalid")

            if(!validateEmailAddress(email)) {
                $("#getEmail").addClass("is-invalid")
                $(this).parent().find("p").remove()
                $(this).parent().append("<p class='signup-error-validation text-danger'>Invalid email format</p>")
            } else {
                $(this).parent().find("p").remove()
                $("#getEmail").removeClass("is-invalid")
                $("#getEmail").addClass("is-valid")
            }
        }

    })





    // ajax
    $("form").submit(function(event){

        event.preventDefault();

        let validationCountSignUp = 0;
        let firstname = $("#getFirstName").val();
        let middlename = $("#getMiddleName").val();
        let lastname = $("#getLastName").val();
        let email = $("#getEmail").val();
        let password = $("#getPassword").val();
        let confirmPassword = $("#getConfirmPassword").val();
        let submit = $("#btn_signup_submit").val();

        // checks if the firstname is valid
        if(!firstname.trim()) {
            $("#getFirstName").addClass("is-invalid")
            $("#getFirstName").parent().find("p").remove()
            $("#getFirstName").parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $("#getFirstName").parent().find("p").remove()
            $("#getFirstName").removeClass("is-invalid")
        
            if(!validateLetters(firstname)) {
                $("#getFirstName").addClass("is-invalid")
                $("#getFirstName").parent().find("p").remove()
                $("#getFirstName").parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $("#getFirstName").parent().find("p").remove()
                $("#getFirstName").removeClass("is-invalid")
                $("#getFirstName").addClass("is-valid")

                validationCountSignUp++;
            }
        }


        // checks if the middlename is valid
        if(!middlename.trim()) {
            $("#getMiddleName").addClass("is-invalid")
            $("#getMiddleName").parent().find("p").remove()
            $("#getMiddleName").parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $("#getMiddleName").parent().find("p").remove()
            $("#getMiddleName").removeClass("is-invalid")
        
            if(!validateLetters(middlename)) {
                $("#getMiddleName").addClass("is-invalid")
                $("#getMiddleName").parent().find("p").remove()
                $("#getMiddleName").parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $("#getMiddleName").parent().find("p").remove()
                $("#getMiddleName").removeClass("is-invalid")
                $("#getMiddleName").addClass("is-valid")

                validationCountSignUp++;
            }
        }

        // checks if the lastname is valid
        if(!lastname.trim()) {
            $("#getLastName").addClass("is-invalid")
            $("#getLastName").parent().find("p").remove()
            $("#getLastName").parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $("#getLastName").parent().find("p").remove()
            $("#getLastName").removeClass("is-invalid")
        
            if(!validateLetters(lastname)) {
                $("#getLastName").addClass("is-invalid")
                $("#getLastName").parent().find("p").remove()
                $("#getLastName").parent().append("<p class='signup-error-validation text-danger'>Letters only from A-Z</p>")
            } else {
                $("#getLastName").parent().find("p").remove()
                $("#getLastName").removeClass("is-invalid")
                $("#getLastName").addClass("is-valid")

                validationCountSignUp++;
            }
        }


        // checks if the email is valid
        if(!email) {
            $("#getEmail").addClass("is-invalid")
            $("#getEmail").parent().find("p").remove()
            $("#getEmail").parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $("#getEmail").parent().find("p").remove()
            $("#getEmail").removeClass("is-invalid")

            if(!validateEmailAddress(email)) {
                $("#getEmail").addClass("is-invalid")
                $("#getEmail").parent().find("p").remove()
                $("#getEmail").parent().append("<p class='signup-error-validation text-danger'>Invalid email format</p>")
            } else {
                $("#getEmail").parent().find("p").remove()
                $("#getEmail").removeClass("is-invalid")
                $("#getEmail").addClass("is-valid")
  
                validationCountSignUp++;
            }
        }


        // checks if the password is more than 8 characters
        if(password == "") { 
            $("#getPassword").addClass("is-invalid")
            $("#getPassword").parent().find("p").remove()
            $("#getPassword").parent().append("<p class='signup-error-validation text-danger'>Field cannot be blank</p>")
        } else {
            $("#getPassword").parent().find("p").remove()
            $("#getPassword").removeClass("is-invalid")
            $("#getPassword").addClass("is-valid")

            if(password.length < 8 || password.length > 32) {
                $("#getPassword").addClass("is-invalid")
                $("#getPassword").parent().find("p").remove()
                $("#getPassword").parent().append("<p class='signup-error-validation text-danger'>Password must be 8-32 characters</p>")
            } else {
                $("#getPassword").parent().find("p").remove()
                $("#getPassword").removeClass("is-invalid")
                $("#getPassword").addClass("is-valid")

                if(!validatePassword(password)) {
                    $("#getPassword").addClass("is-invalid")
                    $("#getPassword").parent().find("p").remove()
                    $("#getPassword").parent().append("<p class='signup-error-validation text-danger'>Must contain atleast 1 digit (0-9) and symbol (!@#$%^&*)</p>")
                } else {
                    $("#getPassword").parent().find("p").remove()
                    $("#getPassword").removeClass("is-invalid")
                    $("#getPassword").addClass("is-valid")
                    
                    validationCountSignUp++;
                }
            }
        }


        // checks if password is same
        if(password !== confirmPassword) {
            $("#getConfirmPassword").addClass("is-invalid")
            $("#getConfirmPassword").parent().find("p").remove()
            $("#getConfirmPassword").parent().append("<p class='signup-error-validation text-danger'>Password is not identical</p>")
        } else {
            $("#getConfirmPassword").parent().find("p").remove()
            $("#getConfirmPassword").removeClass("is-invalid")
            $("#getConfirmPassword").addClass("is-valid")

            validationCountSignUp++;
        }

        console.log(validationCountSignUp);

        if(validationCountSignUp == 6) {

            $("#signup_validation").load("db/db_signup_user.php", {
                firstname: firstname,
                middlename: middlename,
                lastname, lastname,
                email: email,
                password: password,
                submit: submit
            });

            $("#signup_validation").css("display", "block");
            $("form").find("input, textarea").val("");

            
            $("#getFirstName").removeClass("is-valid")
            $("#getMiddleName").removeClass("is-valid")
            $("#getLastName").removeClass("is-valid")
            $("#getEmail").removeClass("is-valid")
            $("#getPassword").removeClass("is-valid")
            $("#getConfirmPassword").removeClass("is-valid")
        }

    })


});