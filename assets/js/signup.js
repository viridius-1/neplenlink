
$(document).ready(function () {


    let username = localStorage.getItem("username");
    $("#username").val(username);
    let timeout = 0;
    // *********************** Check Username ***********************************
    // document.getElementById("username").addEventlistener("keyup",function(){
    document.getElementById("username").addEventListener("keyup", function () {
        let username = $("#username").val();
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            $.ajax({
                type: "POST",
                url: "../model/check.php",
                data: { username: username},
                success: function (result) {
                    if (result == 'true') {
                        $("#username-hold").css("border-color", "red").css("border-width", "2px");
                        // $("#message").css("color", "red");
                        // document.getElementById("message").innerText = "Email is invalid";
                        // alert("The username is taken");
                    }
                    else { $("#username-hold").css("border-color", "green").css("border-width", "2px"); }

                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            })
        }, 500);

    });
    // **************************** check email ******************************* 
    // document.getElementById("username").addEventlistener("keyup",function(){
    document.getElementById("email").addEventListener("keyup", function () {
        let email = $("#email").val();
        clearTimeout(timeout);
        timeout = setTimeout(function () {
            if (!email || !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                $("#message").css("color", "red");
                document.getElementById("message").innerText = "Email is invalid";
                $("#email").css("border-color", "red").css("border-width", "2px");
                // return false;
            }else{

                $.ajax({
                    type: "POST",
                    url: "../model/check.php",
                    data: { email: email },
                    success: function (result) {
                        // alert(result)
                        if (result == 'true') {
                            $("#email").css("border-color", "red").css("border-width", "2px");
                            // $("#email").val("");
                            return;
                        }
                        else {
                            document.getElementById("message").innerText = " ";
                            $("#email").css("border-color", "green").css("border-width", "2px"); }
    
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        alert(xhr.status);
                        alert(thrownError);
                    }
                })

            }
   
        }, 500);
    });

    // **************************** Check Password ******************************* 
    // document.getElementById("username").addEventlistener("keyup",function(){

    // document.getElementById("password").addEventListener("keyup", function () {

    //     clearTimeout(timeout);
    //     timeout = setTimeout(alert("hi"), 5000)
    // })


});


function checkPassword(password) {

}

function signup() {

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;



    // Check if the name is empty
    if (!username) {
        $("#message").css("color", "red");
        document.getElementById("message").innerText = "Name is required";
        
    }

    // Check if the email is empty or invalid
    if (!email || !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
        $("#message").css("color", "red");
        document.getElementById("message").innerText = "Email is invalid";
        $("#email").css("border-color", "red").css("border-width", "2px");
       
    }

    // Check if the password is empty or too short
    if (!password || password.length < 8) {
        $("#message").css("color", "red");
        document.getElementById("message").innerText = "Password must be at least 8 characters long";
        $("#password").css("border-color", "red").css("border-width", "2px");
       
    }

    // If all inputs are valid, return true
    else {
        $("#password").css("border-color", "green").css("border-width", "2px");

        $.ajax({
            url: "../model/signup.php",
            type: "post",
            data: {
                username: username,
                password: password,
                email: email
            },
            success: function (data) {
                // console.log(typeof data)
                console.log(data)
                if (data == 1) {
                    localStorage.setItem("username", username);
                    $("#message").css("color", "green");
                    document.getElementById("message").innerText = "You are Now Authenticated user,Login to use our Service";
                    // window.open("../../pages/login.php"); 
                }
                else {
                    // alert(data)
                    $("#message").css("color", "red");
                    document.getElementById("message").innerText = ""+data+"";
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr)
            }
        })

    }



}


// sign up using google

// // 1. Redirect the user to the Google authorization endpoint
// window.location.replace("https://accounts.google.com/o/oauth2/auth?client_id=<YOUR_CLIENT_ID>&redirect_uri=<YOUR_REDIRECT_URI>&scope=email%20profile&response_type=code");

// // 2. Handle the redirect from Google and exchange the authorization code for an access token
// const params = new URLSearchParams(window.location.search);
// const code = params.get("code");
// if (code) {
//   // send a post request to the token endpoint to exchange the code for an access token
//   fetch("https://oauth2.googleapis.com/token", {
//     method: "post",
//     headers: {
//       "Content-Type": "application/x-www-form-urlencoded"
//     },
//     body: `code=${code}&client_id=<YOUR_CLIENT_ID>&client_secret=<YOUR_CLIENT_SECRET>&redirect_uri=<YOUR_REDIRECT_URI>&grant_type=authorization_code`
//   })
//     .then(response => response.json())
//     .then(({ access_token }) => {
//       // 3. Use the access token to retrieve the user's profile information
//       fetch("https://www.googleapis.com/oauth2/v1/userinfo", {
//         headers: {
//           Authorization: `Bearer ${access_token}`
//         }
//       })
//         .then(response => response.json())
//         .then(profile => {
//           // 4. Use the profile information to sign the user up
//           console.log(profile);
//         });
//     });
// }
