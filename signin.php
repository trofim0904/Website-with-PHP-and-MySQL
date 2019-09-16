<?php
     require "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
  
    <title>Alco-Antonio(Registration)</title>
</head>
<body>
        <main>

              <?php 
                $data = $_POST;
                if( isset($data['do_login']) )
                {
                    $errors = array();
                    $user = R::findOne('users', 'login = ?', array($data['login']));
                    if ( $user )
                    {
                        if( password_verify($data['password'], $user->password) ) {
                            $_SESSION['logged_user'] = $user;
                            ?>
                             <script>document.location.href="/"</script>
                            <?php
                            

                        } else
                        {
                            $errors[] = 'Wrong password!';
                        }
                    } else
                    {
                        $errors[] = 'Login does not exist!';
                    }
                    if( ! empty($errors) )
                    {
                        echo '<div  class="messageSign" style="color: red">'.array_shift($errors).'</div>';
                    }

                }

            ?>

            <form action="signin.php" method="POST" class="login-form">
                <h1>Login</h1>
        
                <div class="txtb">
                <input type="text" name="login" >
                <span data-placeholder="Username"></span>
                </div>
        
                <div class="txtb">
                <input type="password" name="password">
                <span data-placeholder="Password"></span>
                </div>
        
                <input type="submit" class="logbtn" value="Login" name="do_login">
        
                <div class="bottom-text">
                Don't have account? <a href="/signup.php">Sign up</a>
                <p><a href="/">Back to main</a></p>
                </div>
        
            </form>

            <script type="text/javascript" src="/js/form.js"></script>
       
        </main>
</body>
</html>