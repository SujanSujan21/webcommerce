<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../assets/css/lgstyle.css">
</head>
<body>
    <div id= "form">
        <h1>Login Form </h1>
        <form name="form"action="loginlogic.php" onsubmit="return isvalid()"  method="POST">
        
        <label>Username</label>
        <input type="text" id="user"name="user">
        <br><br>
        <label>Password</label>
        <input type="password"id="pass"name="pass">
        <br><br>
       <input type="submit"id="btn"value="Login" name="submit">
        </form>
    </div>
    <script>
        function isvalid(){
            var user = document.form.user.value;
            var user = document.form.pass.value;
            if(user.length==""&& pass.length==""){
                alert("Username and password field is empty !!");
                return false
            }
            else(
                if(user.length==""){
                alert("Username is empty !!");
                return false
                }
                if(pass.length==""){
                alert("Password is empty !!");
                return false
                }
            )
        }
    </script>
</body>
</html>