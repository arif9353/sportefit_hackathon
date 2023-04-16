<?php include('server.php') ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/f4326d079d.js" crossorigin="anonymous"></script>
    </head>
<body>
    <div class="container">
        <h1 style='text-align:center; color:navy; text-decoration-line: underline;
  text-decoration-style: solid;'>Sportefit</h1>
        <div class="form-box">
            <h1 id="title">Login</h1>
            <form method="post" action="login.php">
                <?php include('errors.php'); ?>
                <div class="input-group">
                     <div class="input-field" id="nameField">
                        <i class="fa-regular fa-user"></i>
                        <input type="text" name="username" placeholder="Username" >
                     </div>
                     <div class="input-field">
                        <i class="fa-regular fa-lock"></i>
                        <input type="password" name="password" placeholder="Password">
                     </div>
                </div>
                <div class="btn-field">
                    <button type="submit" id="registerbtn"> <a href="register.php">Register</a></button>
                    <button type="submit" class="disable" id="loginbtn" name="login_user">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>