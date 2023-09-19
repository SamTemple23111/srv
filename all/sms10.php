<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Panel</title>
    <link rel="icon" href="images/favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="node_modules/halfmoon/css/halfmoon.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>
<body class="dark-mode with-custom-css-scrollbars with-custom-webkit-scrollbars">
    <!-- Page wrapper -->
    <div class="page-wrapper with-navbar with-sidebar">
        <!-- Navigation bar -->
        <div class="navbar">
            <div class="navbar-content">
                <button id="sidebar" class="btn btn-square">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <a href="#" class="navbar-brand">
                <img src="images/icon.svg" alt="icon" width="30" height="30"> EMBLEM SMS
            </a>
            <span class="navbar-text">
                <span class="version"></span>
            </span>
        </div>
        <!-- End navigation bar -->
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="sidebar-menu">
                <h6 class="sidebar-title">Dashboard</h6>
                <div class="sidebar-divider"></div>
                <a href="login.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-sign-in-alt"></i>
                    </span>
                    Login
                </a>
                <a href="logout.html" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-sign-out-alt"></i>
                    </span>
                    Logout
                </a>
                <h6 class="sidebar-title mt-20">Application</h6>
                <div class="sidebar-divider"></div>
                <a href="sms1.php" class="sidebar-link sidebar-link-with-icon ">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 1
                </a>
                <a href="sms2.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 2
                </a>
                <a href="sms3.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 3
                </a>
                <a href="sms4.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 4
                </a>
                <a href="sms5.php" class="sidebar-link sidebar-link-with-icon ">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 5
                </a>
                <a href="sms6.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 6
                </a>
                <a href="sms7.php" class="sidebar-link sidebar-link-with-icon ">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 7
                </a>
                <a href="sms8.php" class="sidebar-link sidebar-link-with-icon ">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 8
                </a>
                <a href="sms9.php" class="sidebar-link sidebar-link-with-icon">
                    <span class="sidebar-icon">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 9
                </a>
                <a href="sms10.php" class="sidebar-link sidebar-link-with-icon active">
                    <span class="sidebar-icon bg-primary text-white">
                        <i class="fa-solid fa-pen"></i>
                    </span>
                    SRV 10
                </a>
            </div>
        </div>
        <!-- End sidebar -->
        <!-- Content wrapper -->
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row row-eq-spacing align-items-center">
                    <div class="col-12 col-sm-auto">
                        <h4 class="my-0">
                            <i class="fa-solid fa-pen mr-5"></i> SMS SERVER
                        </h4>
                    </div>
                </div>
                    <div class="row row-eq-spacing">
                      <div class="col-12 col-sm-6 col-lg-9">
                        <div class="card p-15">
                            <form id="login" onsubmit="process(event)">
                                <p>Input phone Number (Include the country code without +):</p>
                                <input type="tel" id="number" required/>

                                <p>Message:</p>
                                    <label for="content">Text Standard 150 Characters</label>
                                    <textarea id="msg" class="form-control h-200" placeholder="Content"></textarea>
                                <p>

                                    Select mobile carrier: 
                                    <select type ="option" name="carrier" id="carrier">
                                            <option value="tmobile">tmobile</option>
                                            <option value="verizon">verizon</option>
                                            <option value="telus">telus</option>
                                            <option value="republic">republic</option>
                                            <option value="att">att</option>
                                            <option value="sprint">sprint</option>
                                            <option value="uscellular">uscellular</option>
                                            <option value="cricket">cricket</option>
                                    </select>
                                    </p>

                                    <p>
                                    <div class="text-center">
                                            <button type="submit" value="send">
                                                <i class="fa-solid fa-sign-in-alt mr-5"></i> SEND
                                            </button>
                                    </div>
                                    </p>
                            </form>
                            <div class="container">
                            <div class="alert alert-info" style="display: none;"></div>
                            <div class="alert alert-error" style="display: none;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End content wrapper -->
                        
    </div>
    <!-- End page wrapper -->
    <script src="node_modules/halfmoon/js/halfmoon.min.js"></script>
    <script src="js/srv10.js" type="text/javascript" ></script>
</body>
</html>

