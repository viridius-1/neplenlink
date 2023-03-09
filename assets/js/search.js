$(document).ready(function(){
    let timeout=0;
    // document.getElementById("username").addEventlistener("keyup",function(){
    document.getElementById("username").addEventListener("keyup",function(){
    let username = $("#username").val();
    if( username == ' '){
        alert("You must enter a value");
        return;
     }
     else{
     clearTimeout(timeout);
     timeout = setTimeout(function(){
           $.ajax({
            type:"POST",
            url:"model/check.php",
            data:{username:username},
            success:function(result)
            {
              if(result)
              alert("The username is taken");
              else
              {
                localStorage.setItem("username",username);
                window.open('pages/signup.php');
                // To retrieve Encrypted username
            }
              
            },
            error:function(){
              alert("Error");  
            }
           })
     },3000);
    }
})
})