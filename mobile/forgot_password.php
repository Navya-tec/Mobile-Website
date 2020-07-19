<html>
    <head>
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
         <script src="bootstrap-3.3.7-dist/jquery/jquery-3.5.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'header.php'; ?>
        <div class="col-lg-offset-4 col-lg-5">
            
        <form>
            <h3>
                Enter E-mail id to have the new password.</h3>
             <div class="form-group">
                    <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                </div>
            
                           <button type="submit" class="btn btn-primary">Submit</button>
        </form></div>
        
    <br><br><br><br><br><br><br><br><center> <p>New Password will be set and send to your email account.</p></center>
    </body>
      
</html>