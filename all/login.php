 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin Panel</title>
     <link rel="icon" href="images/favicon.png" type="image/png">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">
     <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
     <link rel="stylesheet" href="node_modules/halfmoon/css/halfmoon.min.css">
     <link rel="stylesheet" href="css/style.css">
 </head>
 <body class="dark-mode with-custom-css-scrollbars with-custom-webkit-scrollbars">
     <!-- Page wrapper -->
     <div class="page-wrapper">
         <!-- Content wrapper -->
         <div class="content-wrapper">
             <div class="container h-full">
                 <div class="row justify-content-center align-items-center h-full">
                     <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                         <div class="text-center">
                             <img src="images/logo.svg" alt="logo" width="150">
                         </div>
                         <div class="card p-15">
                             <h1 class="card-title">
                                 <i class="fa-solid fa-sign-in-alt mr-5"></i> Login
                             </h1>
                         
                     <form action="#" method="post">
                     <div class="form-group">
                             <label>Username</label>
                             <input type="text" name="username" class="form-control " value="">
                             <span class="invalid-feedback"></span>
                         </div>    
                         <div class="form-group">
                             <label>Password</label>
                             <input type="password" name="password" class="form-control ">
                             <span class="invalid-feedback"></span>
                         </div>
                         <div class="text-right">
                                     <button class="btn">
                                         <i class="fa-solid fa-sign-in-alt mr-5"></i> Login
                                     </button>
                                 </div>
                         <p>Forgot password? <a href="reset-password.php">reset password</a>.</p>
                     </form>
             </div>
             <div class="text-center">
                             <span>&copy; 2022 <a href="index.php" class="text-light">EM6L3M</a>.</span><br>
                             <span>Designed By <a href="#" target="_blank" class="text-light">EM6L3M</a>.</span><br>
                             <small>Current version: <span class="version"></span></small>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- End content wrapper -->
     </div>
     <!-- End page wrapper -->
     <script src="node_modules/halfmoon/js/halfmoon.min.js"></script>
     <script src="js/script.js"></script>
 </body>
 </html>
 
