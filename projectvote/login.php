
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Form</title>
    <link rel="stylesheet" href="signup.css">
    <style>
      input[type="submit"]{
        justify-content: space-between;
        align-items: baseline;
        margin: 20px;
        padding: auto;
      }
    </style>

</head>
<body>





<div class="container">
  <form action="insertuser.php" method="post">
<div class="row">
    <div class="col-25">
      <label for="item">User Name:</label>
    </div>
    <div class="col-75">
      <input type="text" id="user" name="user" placeholder="Username..">
    </div>
  </div>



<div class="row">
    <div class="col-25">
      <label for="price">password</label>
    </div>
    <div class="col-75">
      <input type="password" id="pass" name="pass" placeholder="Password">
    </div>
  </div>

<div class="row">
    <input type="submit" value="log in" class="login"  >

    <input type="submit" value="Sign Up" class="login"  >
  </div>
  </form>
</div>


</body>
</html>



