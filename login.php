<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/index.css">
    <title>The Login Form</title>
<style>
.header {
padding: 70px;
font-size: 50px;
text-align: center;
background: white;
background-image: url('images/12.jpg');
background-repeat: no-repeat;
background-size: cover;
}
    </style>

<body>

    
   
     <div class="header">
  <h2>EMPLOYEES DATABASE MANAGEMENT</h2>
</div>

<div class="list">
<ul>
  <li><a href="index.php">HOME</a></li>
      <li><a href="designs.php">DESIGNS</a></li>
         <li><a href="artists.php">ARTISTS</a></li>
              <li><a href="training.php">TRAINING</a></li>
<li><a href="contact.php">CONTACT US </a></li> 
<li><a href="login.html">ADMIN</a></li>   
</ul>
</div>


   <div class="main-content">
        <br><br><br><br><br>
        <form class="form-register" >

            <div class="form1" >

                <div class="form-white-background" style= "background-color: pink;">

                    <div class="form-title-row">
                        <h1>Login Here</h1>
                        <p> <BR> ADMIN || HR</p>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Username</span>
                            <input type="text" name="name" id="name" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="text" name="password" id="pwd" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <center><input type="button" value="Login" id="submit" onclick="validate()" style="background-color: lightblue; font-size: 20px;"/></center>
                        </label>
                    </div>
                   </div> 
            </div>
        </form>
    </div>
</body>

<script>
var attempt = 5; 
function validate(){
var username = document.getElementById("name").value;
var password = document.getElementById("pwd").value;
if ( username == "admin" && password == "admin"){
alert ("Login successfull");
window.location = "admin.php"; 
return false;
}
else if(username == "hr" && password == "hr")
{
    alert ("Login successfull");
    
window.location = "hr.php"; 
return false;
}
else{
attempt --;
alert("You have "+attempt+" attempts left");
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>
</html>
