<?php
     require "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="shortcut icon" href="/img/icon.ico" type="image/x-icon">
    <title>Alco-Antonio</title>
</head>
<body>
    <header>
        <?php
            require_once "includes/navbar.php";
            
        ?> 
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-8 mainPage">
                    
                    <form action="/order.php" method="POST" class="order-form">
                        <h2>Order</h2>    
                        <div class="txtb">
                            <input type="text" name="name" >
                            <span data-placeholder="Name"></span>
                        </div>
                        <div class="txtb">
                            <input type="text" name="surname" >
                            <span data-placeholder="Surname"></span>
                        </div>
                        <div class="txtb">
                            <input type="email" name="email" >
                            <span data-placeholder="Email"></span>
                        </div>
                        <div class="txtb">
                            <input type="tel" name="phone-number" >
                            <span data-placeholder="Phone"></span>
                        </div>
                       
                        
                        <div class="txtb">
                            <input type="text" name="date-time" >
                            <span data-placeholder="Date and time"></span>
                        </div>
                        <div class="txtb">
                            <input type="text" name="position" >
                            <span data-placeholder="Position"></span>
                        </div>
                        <div class="txtb">
                            <input type="text" name="comment" >
                            <span data-placeholder="Comment"></span>
                        </div>
                        <p>
                            <input type="button" value="Enter" name="make-order" class="logbtn" disabled> 
                        </p>
                        <p class="bottom-text"><strong>This feature does not work</strong></p>
                    </form>
                
                </div>
                <div class="col-sm-12 col-md-4 sidebar">
                    <?php
                        require_once "includes/sidebar.php";
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php
        require_once "includes/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/js/form.js"></script>
</body>
</html>