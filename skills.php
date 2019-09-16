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
                 <div class="skills-page">    
                <h2>Skills</h2>
                    <ol>
                    <?php
                            $rows_skills = R::getAssoc('SELECT * FROM skills');

                            foreach ($rows_skills as $row)
                            {
                            
                        ?> 
                        <li> 
                            
                            <p class="comment-text"> 
                            <?php
                                echo $row;  
                            ?>
                            </p>
                            
                        </li>
                        <!-- <div class="line"></div> -->
                    <?php  
                        }
                    ?>
                    
                    </ol>
                </div>
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
    
</body>
</html>