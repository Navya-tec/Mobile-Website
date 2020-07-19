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
    <title>Settings | Mobile Shoppee</title>
</head>
<body>
    <!-- Header -->
    <?php
        require 'header.php';
    ?>
    <!-- !Header -->

    <!-- Main -->
        <div class="content">
          <div class="container">
          <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default-setting">
            <div class="panel-heading">
              <h2 class="text-center">Change Password</h2>
            </div>
            <div class="panel-body">
                <form action="settings_script.php" method="POST">
                  <div class="form-group">
                    
                    <input type="password" class="form-control" placeholder="Old Password" name="oldPassword" required>                    
                  </div>
                  <div class="form-group">
                     
                    <input type="password" placeholder="New Password" class="form-control" name="newPassword" required>
                  </div>
                  <div class="form-group">
                    
                    <input type="password" placeholder="Re-Type New Password" class="form-control" name="newPasswordRe" required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  <input type="submit" class="btn btn-primary" value="Confirm">
                </form>
            </div>
          </div>
          </div>
          </div>
        </div>
    <!-- !Main -->

    <!-- Footer -->
    <?php
        require 'footer.php';
    ?>  
    <!-- !Footer -->
</body>
</html>