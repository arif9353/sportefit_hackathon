<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/f4326d079d.js" crossorigin="anonymous"></script>
     
    </head>
<body>
    <div class="container">
        <header>
            <h1 style='text-align:center; color:navy; text-decoration-line: underline;
  text-decoration-style: solid;'>Sportèfit</h1>
</header>
        <div class="form-box">
            <h1 id="title">Register</h1>
            <form method="post" action="register.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                     <div class="input-field" id="nameField">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
                     </div>
                     <div class="input-field">
                        <i class="fa-regular fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
                     </div>
                     <div class="input-field">
                        <i class="fa-regular fa-lock"></i>
                        <input type="password" name="password_1" placeholder="Password">
                     </div>
                     <div class="input-field">
                        <i class="fa-regular fa-lock"></i>
                        <input type="password" name="password_2" placeholder="Confirm Password">
                     </div>
                </div>
                <div class="btn-field">
                    <button type="submit" id="registerbtn" name="reg_user">Register</button>
                    <button type="submit" class="disable" id="loginbtn"><a href="login.php">Login</a></button>
                </div>
            </form>
        </div>
    </div>

</body>
</html>