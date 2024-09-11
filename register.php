
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>project</title>
    <style>
        body{
            background-image: url("images/backr.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center center;
            
        }
    </style>
</head>
<body>

    <div>
        <form method="post" action="submit.php">
            <h1>Register</h1>
                <p style="text-decoration:underline; font: size 16px;"> Please fill in this form to create an account.</p>
                <hr>
            <div class="fo">
                
                <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" placeholder="Enter Full Name" name="name" id="name" required>
                </div>

                <div class="form-group">
                <label for="email"><b>Email</b></label>
                <input type="email" placeholder="Enter Email" name="email" id="email" required>
                </div>

                <div class="form-group">
                <label for="psw" ><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>
                </div>
               <!-- <label for="psw-repeat"><b>Retype password</b></label>
                <input type="password" placeholder="Retype password" name="psw-repeat" required>-->
                <hr>
                <p> By Creating an account you    agree to our <a href="#" style="color:blue; font-weight:bolder; font-size:medium;"> Terms & privacy</a></p>

                <button type="submit" class="registerbtn">Register</button>

            </div>
            <div class="fo signin">
                <p> Already have an account?<a href="http://localhost/cproject/login.php" style="color:blue; font-weight:bolder; font-size:medium;"> Sign in</a></p>
            </div>
        </form>
    </div>
</body>
</html>