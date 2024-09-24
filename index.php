<?php
    include_once 'config/settings-configuration.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>
<body>
    <div class="bg_img">
        
        <div class="sign_in">
          <h1>SIGN IN</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name="csrf_token" value="<?php echo  $csrf_token?>">
                <div class="form-group1">
                    <input type="email" name="email" placeholder="Enter Email" required> <br>
                </div>
                <div class="form-group2">
                    <input type="password" name="password" placeholder="Enter Password" required> <br>
                </div>
                <button type="submit" name="btn-signin">SIGN IN</button>
            </form>
        </div>
    
        <div class="sign_up">
            <h1>REGISTRATION</h1>
            <form action="dashboard/admin/authentication/admin-class.php" method="POST">
                <input type="hidden" name= "csrf_token" value="<?php echo  $csrf_token?>">
                <div class="form-group1">
                    <input type="text" name="username" placeholder="Enter Username" required> <br>
                </div>
                <div class="form-group2">
                    <input type="email" name="email" placeholder="Enter Email" required> <br>
                </div>
                <div class="form-group3">
                    <input type="password" name="password" placeholder="Enter Password" required> <br>
                </div>
                <button type="submit" name="btn-signup">SIGN UP</button>
            </form>
        </div>
    </div>
</body>
</html>