
<?php
    include 'common.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7-dist/jquery/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       
    <!-- Header -->
        <?php
            include 'header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container-fluid">
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"> 
                                <img src="img/img/download.jfif" class="img-responsive img-phone" alt="phone">
                                
                                <p>Battery : 3800mAH
                                Camera : 48MP +8MP + 16MP | 16MP Front Camera
                                RAM : 8GB ROM:128GB
                                Price : 35,999/-</p>
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="img/img/images (3).jfif" class="img-responsive img-phone" alt="Phone"> 
                             
                                 
                                <p>Battery : 4085mAH
                                Camera : 48MP +8MP + 16MP | 16MP Front Camera
                                RAM : 8GB ROM:128GB
                                Price : 47,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="img/img/images (1).jfif" class="img-responsive img-phone" alt="Phone">
                             
                               
                                <p>Battery : 3400mAH 
                                Camera : 42MP + 20MP | 16MP Front Camera 
                                RAM : 8GB ROM:256GB 
                                 Price : 99,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="img/img/images.jfif" class="img-responsive img-phone" alt="Phone">
                            
                                <p>Battery : 4085mAH 
                                Camera : 20MP + 16MP | 16MP Front Camera 
                                RAM : 8GB ROM:256GB 
                                Price : 53,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="img/img/download (1).jfif" class="img-responsive img-phone" alt="Phone"> 
                            
                                <p>Battery : 3400mAH 
                                 Camera : 20MP | 16MP Front Camera 
                                 RAM : 8GB ROM:128GB 
                                Price : 41,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/img/images (2).jfif" class="img-responsive img-phone" alt="Phone"></div>
                            
                                <p>Battery : 3400mAH
                                Camera : 48MP + 13MP + 8MP | 16MP Front Camera
                                RAM : 8GB ROM:256GB
                                Price : 29,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
    <!-- Main End -->

    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->
</body>
</html>
    </body>
</html>
