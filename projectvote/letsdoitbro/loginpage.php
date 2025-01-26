<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting Login and Registration Page</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="outer_box">
        <div class="top-text">
        <h1>Login Page</h1>
</div>
        <form class="form1" method=POST action="logincheck.php">
        <div class="inner_box1">
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Input Username" require>
        </div>


<br>
        <div class="inner_box2">
            <label for="password">Password:</label>
            <input type="password" name="password" placeholder="Input Password" require>
        </div>


        <div class="checkbox1">
        
            <input type="checkbox" name="box">
            <label for="box">Remember me?</label>
            
        </div>





<input type="submit" id="submit" value="Submit">

</form>








<button><a href="#">Forgot Password?</a></button>
<button><a href="newaccountregistration.php">New Account Registration</a></button>
</div>





    
</body>
</html>