<?php
     require "includes/db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
  
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/swiper.min.css">
   
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
    <main class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8 mainPage">
                <h2>Main Info</h2>
                <p class="container">
                    Привет аuctor leo facilisi est nam torquent dapibus. Elit dis dictumst Ultrices sapien bibendum curae; magnis venenatis inceptos amet eros faucibus mattis hendrerit mi nam, molestie Arcu. Dapibus potenti malesuada lacinia vitae netus feugiat cum leo imperdiet turpis ullamcorper odio inceptos montes. Elementum nascetur penatibus leo velit cum Accumsan. Vitae penatibus inceptos nisl conubia et sagittis sem ullamcorper fames facilisi habitasse nascetur vivamus. Ut justo nunc. Condimentum class integer volutpat ut inceptos libero est enim adipiscing, volutpat ac pretium parturient tincidunt ultrices interdum aenean.

                    Viverra non risus et viverra. Dictumst lacus vel adipiscing. Quisque sagittis. Nibh nonummy donec pulvinar eu tellus ad ultricies condimentum lobortis tortor. Congue senectus et habitant congue. Ante cubilia.    
                </p>
            
                <div class="swiper-container">
                        <div class="swiper-wrapper">
                          <div class="swiper-slide" style="background-image:url(/img/cat.jpg)"></div>
                          <div class="swiper-slide" style="background-image:url(/img/cat.jpg)"></div>
                          <div class="swiper-slide" style="background-image:url(/img/cat.jpg)"></div>
                          <div class="swiper-slide" style="background-image:url(/img/cat.jpg)"></div>
                          <div class="swiper-slide" style="background-image:url(/img/cat.jpg)"></div>
                         
                        </div>
                      
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                      </div>
            </div>
           
            <div class="col-sm-12 col-md-4 sidebar">
                <?php
                  require_once "includes/sidebar.php";
                ?>
            </div>
    </main>
    <?php
        require_once "includes/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/js/swiper.min.js"></script>
    <script>
            var swiper = new Swiper('.swiper-container', {
              effect: 'coverflow',
              grabCursor: true,
              centeredSlides: true,
              slidesPerView: 'auto',
              coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true,
              },
              pagination: {
                el: '.swiper-pagination',
               
              },
              navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
            },
            });
          </script>
</body>
</html>