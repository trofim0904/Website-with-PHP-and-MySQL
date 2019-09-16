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
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Alco-Antonio(Registration)</title>
</head>
<body>
    <!-- <header>
            <?php
               
                require_once "includes/navbar.php";
            ?> 
        </header> -->
        <main>
        <!-- <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 mainPage"> -->
                    <?php
                        

                        $data = $_POST;
                        if( isset($data['do_signup']) )
                        {
                            $errors = array();
                            if( trim($data['login']) == '' )
                            {
                                $errors[] = 'Enter login!';
                            }
                            if( trim($data['email']) == '' )
                            {
                                $errors[] = 'Enter email!';
                            }
                            if( ($data['password']) == '' )
                            {
                                $errors[] = 'Enter password!';
                            }
                            if( ($data['password_2']) != $data['password'] )
                            {
                                $errors[] = 'Password wrong!';
                            }
                            if( R::count('users', "login = ?", array($data['login'] )) > 0 )
                            {
                                $errors[] = 'This login already exists';
                            }
                            if( R::count('users', "email = ?", array($data['email'] )) > 0 )
                            {
                                $errors[] = 'This email already exists';
                            }

                            if ( empty($errors) )
                            {
                                $user = R::dispense('users');
                                $user->login = $data['login'];
                                $user->email = $data['email'];
                                $user->password = password_hash($data['password'], PASSWORD_DEFAULT);
                                R::store($user);
                                ?>
                                    <script>document.location.href="/"</script>
                                <?php
                                
                            } else
                            {
                                echo '<div  class="messageSign" style="color: red">'.array_shift($errors).'</div>';
                            }

                        }

                    ?>

            <form action="/signup.php" method="POST" class="login-form">
                <h1>Registration</h1>
        
                <div class="txtb">
                <input type="text" name="login" >
                <span data-placeholder="Username"></span>
                </div>

                <div class="txtb">
                <input type="email" name="email" >
                <span data-placeholder="Email"></span>
                </div>
        
                <div class="txtb">
                <input type="password" name="password">
                <span data-placeholder="Password"></span>
                </div>

                <div class="txtb">
                <input type="password" name="password_2">
                <span data-placeholder="Repeat password"></span>
                </div>
        
                <input type="submit" class="logbtn" value="Login" name="do_signup">
        
                <div class="bottom-text">
                
                <p><a href="/">Back to main</a></p>
                </div>
        
            </form>

            

                    <!-- <form action="/signup.php" method="POST">
                        <p>
                            <p><strong>Login:</strong></p>
                            <input type="text" name="login" value="<?php echo @$data['login']; ?>">
                        </p>
                        <p>
                            <p><strong>Email:</strong></p>
                            <input type="email" name="email" value="<?php echo @$data['email']; ?>">
                        </p>
                            <p>
                            <p><strong>Password:</strong></p>
                            <input type="password" name="password" value="<?php echo @$data['password']; ?>">
                        </p>
                            <p>
                            <p><strong>Repeat password:</strong></p>
                            <input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
                        </p>
                        <p>
                            <button type="submit" name="do_signup">Registration</button>
                        </p>
                    </form>
                </div>
                <div class="col-sm-12 col-md-4 sidebar">
                    <?php
                        require_once "includes/sidebar.php";
                    ?>
                </div>
            </div>
        </div> -->
        </main>
        <script type="text/javascript" src="/js/form.js"></script>
    <!-- <?php
        require_once "includes/footer.php";
    ?> -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     -->
</body>
</html>