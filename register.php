<?php  

    session_start();
    $connection = new mysqli("localhost", "root", "", "ecom");
    

    if (isset($_POST["register"])) {

      $firstName = $connection->real_escape_string($_POST["firstName"]);  		
      $lastName = $connection->real_escape_string($_POST["lastName"]);  				
      $email = $connection->real_escape_string($_POST["email"]);  
      $password = sha1($connection->real_escape_string($_POST["password"]));  
			
		$data = $connection->query("INSERT INTO login_details (firstName, lastName, email, password) VALUES ('$firstName', '$lastName', '$email', '$password')");
        $_SESSION["email"] = $email;
        $_SESSION["registerIn"] = 1;
        exit('success');
  }              
?>
<html>
  <head>
  <title> Register
</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body{
    background: #C6CD84;
}
  .container {
  padding: 16px;
  margin: 70px;
  background-color: #ECF1BB;
      border-radius: 10px;
      

}

.container h1{
        text-align:center;
        padding:0 0 20px 0;
        border-bottom: 1px solid #A3AC54;
    }
    .container form{
        padding: 0 40px;
        box-sizing: border-box;
    }
    .container h3{
        text-align:center;}  
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 5px 0;
  display: inline-block;
  border-style: inset;
  background: #f1f1f1;
  border-radius: 5px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #586102;
  margin-bottom: 25px;
}
button {
  background-color: #2f4630;
      color: white;
      padding: 16px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 50%;
      opacity: 0.9;
      border-radius: 20px;
}

.wrapper {
    text-align: center;
}


button:hover {
  opacity: 1;
}

  </style>
</head>
    <body>
    <div class = "container">  
    <form method="post" id="register" action="register.php" name = "myForm" onsubmit=" return validateform();"> 
    <h1>Register</h1>
    <h3>Please fill the form to create an account.</h3>
        <label for="name"><b>First Name:</b></label><br>
        <input type="text" placeholder="Enter your First Name" name="name" id="firstName" required onblur = "validatefname();"><br><span id="errorfname" style="color: red;"></span><br>
        <br>
        <label for="name"><b>Last Name:</b></label><br>
        <input type="text" placeholder="Enter your Last Name" name="name" id="lastName" required onblur = "validatelname();"><br><span id="errorlname" style="color: red;"></span><br>
        <br>
        <label for="email"><b>Email:</b></label><br>
        <input type="text" placeholder="Enter your Email" name="email" id="email" required onblur="validateemail();"><br><span id="erroremail" style="color: red;"></span><br>
        <br>
        <label for="psw"><b>Password:</b></label><br>
        <input type="password" placeholder="Enter your Password" name="password" id="password" required onblur="validatepass();"><br><span id="errorpass" style="color: red;"></span><br>
        <small> Password must be minimum 8 characters long and must contain atleast: 1 UpperCase and 1 LowerCase letter, 1 digit, 1 special character! </small>
        <br>
        <br>
        <label for="pswrepeat"><b>Re-enter Password:</b></label><br>
        <input type="password" placeholder="Re-enter your Password" name="pswrepeat" id="pswrepeat" required onblur="validaterepass();"><br><span id="errorrepass" style="color: red;"></span><br>
        <div class="wrapper">
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
        
        
        <button type="submit" class="submit-btn" id="registerBtn">Register</button>
        <p>Already have an account? <a href="login.php">Log in</a></p>
</div>
</form>
</div>

    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type = "text/javascript">
      function validatefname(){
     var name1 = document.myForm.firstName.value;
     var matches = name1.match(/\d+/g);
     if (name1.length <3){
       document.getElementById("errorfname").innerHTML="Please Enter Valid Name!" ;
       document.getElementById("firstName").style.borderColor = "red";
       return false;
     }
     if (matches!= null) {
     document.getElementById("errorfname").innerHTML="Please Enter Valid Name!" ;
     document.getElementById("firstName").style.borderColor = "red";
     return false;
     }
       document.getElementById("errorfname").innerHTML= "" ;
       document.getElementById("firstName").style.borderColor = "#00cc00";
       return true;
   }
   function validatelname(){
     var name1 = document.myForm.lastName.value;
     var matches = name1.match(/\d+/g);
     if (name1.length <3){
       document.getElementById("errorlname").innerHTML="Please Enter Valid Name!" ;
       document.getElementById("lastName").style.borderColor = "red";
       return false;
     }
     if (matches!= null) {
     document.getElementById("errorlname").innerHTML="Please Enter Valid Name!" ;
     document.getElementById("lastName").style.borderColor = "red";
     return false;
     }
       document.getElementById("errorlname").innerHTML= "" ;
       document.getElementById("lastName").style.borderColor = "#00cc00";
       return true;
   }
      function validateemail() {
         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         if (atpos < 2 || ( dotpos - atpos < 5 )) {
            document.getElementById("erroremail").innerHTML="Please Enter Valid Email!" ;
            document.getElementById("email").style.borderColor = "red";
            return false;
         }

         if (emailID.length-dotpos < 3){
           document.getElementById("erroremail").innerHTML="Please Enter Valid Email!" ;
           document.getElementById("email").style.borderColor = "red";
           return false;
         }
         document.getElementById("erroremail").innerHTML= "" ;
         document.getElementById("email").style.borderColor = "#00cc00";
         return( true );
      }
      function validatenumber(){
        var num1 = document.myForm.mobile.value;
        var alpha = num1.match(/[a-zA-Z]/g);
        if (alpha != null){
          document.getElementById("errornum").innerHTML="Please Enter Valid Number!" ;
          document.getElementById("mobile").style.borderColor = "red";
          return false;
        }
        if (num1.length < 10){
          document.getElementById("errornum").innerHTML="Please Enter Valid Number!" ;
          document.getElementById("mobile").style.borderColor = "red";
          return false;
        }
        document.getElementById("errornum").innerHTML= "" ;
        document.getElementById("mobile").style.borderColor = "#00cc00";
        return( true );
      }
      function validatepass(){
        var passwd = document.myForm.password.value;
        var dig = passwd.match(/\d+/g);
        var upper = passwd.match(/[A-Z]/g);
        var lower = passwd.match(/[a-z]/g);
        var special = passwd.match(/[!#$^&,*()%_@\-?:;.<>\[\]\\|\/~]/g);
        if (passwd.length < 8 ){
        document.getElementById("errorpass").innerHTML="Please Enter Valid Password!" ;
        document.getElementById("password").style.borderColor = "red";
        return false;
        }
        if(dig == null){
          document.getElementById("errorpass").innerHTML="Please Enter Valid Password!" ;
          document.getElementById("password").style.borderColor = "red";
          return false;
        }
        if(upper == null){
          document.getElementById("errorpass").innerHTML="Please Enter Valid Password!" ;
          document.getElementById("password").style.borderColor = "red";
          return false;
        }
        if(lower == null){
          document.getElementById("errorpass").innerHTML="Please Enter Valid Password!" ;
          document.getElementById("password").style.borderColor = "red";
          return false;
        }
        if(special == null){
          document.getElementById("errorpass").innerHTML="Please Enter Valid Password!" ;
          document.getElementById("password").style.borderColor = "red";
          return false;
        }
        document.getElementById("errorpass").innerHTML= "" ;
        document.getElementById("password").style.borderColor = "#00cc00";
        return( true );
      }
      function validaterepass(){
        var passwd1 = document.myForm.password.value;
        var repass = document.myForm.pswrepeat.value;
        if(passwd1 != repass){
          document.getElementById("errorrepass").innerHTML="Passwords do not match!";
          document.getElementById("pswrepeat").style.borderColor = "red";
          return false;
        }
        document.getElementById("errorrepass").innerHTML= "" ;
        document.getElementById("pswrepeat").style.borderColor = "#00cc00";
        return( true );
      }
      function validateform(){
        if (!validatefname()){
          alert("Form has invalid field(s)")
          return false;
        }
        if (!validatelname()){
          alert("Form has invalid field(s)")
          return false;
        }
        if (!validateemail()){
          alert("Form has invalid field(s)")
          return false;
        }
        if (!validatepass()){
          alert("Form has invalid field(s)")
          return false;
        }
        if (!validaterepass()){
          alert("Form has invalid field(s)")
          return false;
        }
        return true;
    }
    $(document).ready(function () {
    $("#registerBtn").on('click', function () {
               var firstName = $("#firstName").val();
               var lastName = $("#lastName").val();
               var email = $("#email").val();
               var password = $("#password").val();
               var pswrepeat = $("#pswrepeat").val()

               if (validateform()) {
                    $.ajax({
                        url: 'register.php',
                        method: 'POST',
                        dataType: 'text',
                        data: {
                            register: 1,
                            firstName: firstName,
                            lastName: lastName,
                            email: email,
                            password: password,
                            pswrepeat: pswrepeat
                        }, success: function (response) {
                            if(response === 'failedEmail')
                              alert("Wrong");
                            else
                                alert("You have registered successfully. Thank you!");
                                window.location = "login.php";
                        }
                    });
               } else
                   echo('Please Check Your Inputs');
           });


 });

</script>
    </body>
</html>