
 <?php $con= mysqli_connect('localhost','root','','store') ?>
<html>
    <head>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap-3.3.7-dist/jquery/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
<nav class="navbar navbar-default navbar-fixed top">
<div class="container">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a href="index.php" class="navbar-brand">E-Store</a>
    </div>
    <div class="collapse navbar-collapse" id="myNav">
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])) { ?>                
                <li><a href="cart.php" class="text-center"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                <li><a href="settings.php" class="text-center"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                <li><a href="logout.php" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>                
            <?php } else { ?>
                
                <li><a href="signup.php" class="text-center"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
                <!-- <li><a href="" class="text-center" type="button" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> -->
                <li><a href="" data-toggle="modal" data-target="#loginModal" class="text-center"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                <li><a href="about.php" class="text-center"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                <li><a href="contact.php" class="text-center"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
            <?php } ?>
        </ul>
    </div>
</div>
</nav>
 <div id="loginModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"> &times;</span></button>
                <h3 class="modal-title">Login</h3>
            </div>
            <div class="modal-body">
                <p>Don't have an account?<a href="signup.php">Register</a></p>
                <form method="post" action="login_script.php">
                             
                   <div class="form-group">
                       <label class="sr-only" for="email">Email</label><input type="email" class="form-control input-sm" placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="email" required>
                       </div>
                        <div class="form-group">  
                          
                           <label class="sr-only" for="password">Password</label>
                           <input type="password" class="form-control input-sm" placeholder="Password" pattern=".{6,}" name="password" required></div>
                       <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>

                           <button type="submit" class="btn btn-primary">Login</button>
                      
                    </form>
                <a href="forgot_password.php">
                           Forgot Password?</a>
                
            </div>
<!--
            <div class="modal-footer">
                <div style="padding:10px"></div>
            </div>
-->
        </div>
        </div>
    </div>
     </body>
</html>