<?php

// check for authentication
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
} else {
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageSteg</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/slick.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>

<body>
<div id="header-holder">
    
    <div class="cloud-bg"></div>
    
    <div id="top-content" class="container-fluid">
    <h4 style ="color:white;" >Welcome, <?php echo $username; ?><?php echo '👋 - '; ?><a href="logout.php">Logout</a></h4>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-slider">
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="../images/Binary code-pana.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Implementation of a Web-Based Distributive Steganography Algorithm </div>
                                    
                                    <a href="algorithm.html" class="hbtn hbtn-primary hbtn-lg">Encrypt/Decrypt Message</a> 
                                    <a href="#contents2" class="hbtn hbtn-primary hbtn-lg">How To Use</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="../images/Binary code-pana.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Messages for your eyes alone</div>
                                    <a href="#contents" class="hbtn hbtn-primary hbtn-lg">Encrypt/Decrypt Message</a> 
                                    <a href="#contents2" class="hbtn hbtn-primary hbtn-lg">How To Use</a>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="row rtl-row">
                                <div class="col-sm-5">
                                    <div class="img-holder">
                                        <img src="../images/Binary code-pana.png" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                    <div class="b-text">Decrpt Encrypted Messages</div>

                                    <a href="#contents" class="hbtn hbtn-primary hbtn-lg">Encrypt/Decrypt Message</a> 
                                    <a href="#contents2" class="hbtn hbtn-primary hbtn-lg">How To Use</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src='sjcl.js' type='text/javascript'></script>
<script src='main.js' type='text/javascript'></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/slick.min.js"></script>
<script src="../js/main.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>