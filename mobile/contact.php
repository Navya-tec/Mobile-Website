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
          <link href="style.css" rel="stylesheet">
    <title>Contact | Mobile Shoppee</title>
</head>
<body>
  <!-- Header -->
  <?php
            include 'header.php';
        ?>
    <!-- Header End -->

    <!-- Main -->
        <div class="content">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | 365 Days a Year - Live Technical Support</h4>
                 <p>It is a long established fact that a reader will be distracted by a readable content of a page when looking at its layout.The point 
                    of using Loren Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available
                    ,but the majority have suffered alteration in some form, by injected humour or randomised words which don't even slightly belivable.If you are going 
                    to use a passage of Lorem Ipsum,you need to be sure there isn't anything embarrasing hidden in the middle of text.</p>
              </div>
              </div>

              <div class="col-md-4">
                  <img src="img/img/contact.png" class="img-responsive live-support-img" alt="Contact">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message:</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              
                 <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                    <h2>Company Information:</h2>
                    <p>
                        500 Lorem Ipsum Dolor Sit,<br><br>
                        22-56-2-9 Sit Amet,Lorem,<br><br>
                        USA<br><br>
                        Phone:(00)222 666 444<br><br>
                        Fax :(000)007 89 34 3<br><br>
                        Email : info@mycompany.com<br><br>
                        Follow on : Facebook, Instagram, Twitter
                    </p>
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