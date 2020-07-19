 <?php
    include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
        <script src="bootstrap-3.3.7-dist/jquery/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    <title>Home | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
            include 'header.php';
            include 'check_if_added.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
                    <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>
                <!-- Row 1 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                               <div class="panel-body"> 
                                <img src="img/img/download.jfif" class="img-responsive img-phone" alt="phone">
                                
                                <p>Battery : 3800mAH
                                Camera : 48MP +8MP + 16MP | 16MP Front Camera
                                RAM : 8GB ROM:128GB
                                Price : 35,999/-</p>
                              
                            </div>
                                <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(2)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=2" name="add"  class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(3)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=3" name="add"   class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                              <div class="panel-body"><img src="img/img/images.jfif" class="img-responsive img-phone" alt="Phone">
                            
                                <p>Battery : 4085mAH 
                                Camera : 20MP + 16MP | 16MP Front Camera 
                                RAM : 8GB ROM:256GB 
                                Price : 53,999/-</p>
                                <?php if(check_if_added_to_cart(4)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=4" name="add"  class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
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
                                <?php if(check_if_added_to_cart(5)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=5" name="add"   class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/img/images (2).jfif" class="img-responsive img-phone" alt="Phone"> 
                               <p>Battery : 3400mAH
                                Camera : 48MP + 13MP + 8MP | 16MP Front Camera
                                RAM : 8GB ROM:256GB
                                Price : 29,999/-</p>
                                <?php if(check_if_added_to_cart(6)) {
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>
                                    <a href="cart-add.php?id=6" name="add"   class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
                
    <!-- Footer -->
    <?php
        include 'footer.php';
    ?>
    <!-- Footer End -->
        </div>
</body>

</html>