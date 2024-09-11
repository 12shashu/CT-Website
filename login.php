<!DOCTYPE html>
<html lang="en">


<head>
    <link rel="stylesheet" href="css/style2.css">
    <title>welcome to login page</title>
    <style>
        body{
            background-image: url("images/logback.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
        }
    </style>

</head>
<body>
<div>
    <form method="post" action="login_submit.php">

        <h1>Login</h1>
        <h2>Enter Your Valid Credentials to login</h2>
        <hr>
    <div class="fo">
     <div class="form-group">
        <label for="name"><b>Name</b></label>
        <input type="email" placeholder="Enter Email" name="email" id="email" required>
     </div>
     <div class="form-group">
        <label for="password"><b>password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
     </div>
     <hr>

     <button type="submit" class="registerbtn">Login</button>
     </div>

     <div class="fo signin">
        <p> Don't have account? create one <a href="http://localhost/cproject/register.php" style="color:blue;font-weight:bolder;font-size:medium;">Signup</a></p>
     </div>
    </form>
</div>

</body>
</html>