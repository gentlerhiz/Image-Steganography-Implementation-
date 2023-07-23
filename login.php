<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ImageSteg</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
</head>

<style>
    body{
        background-image: url(images/cloud-bg2.svg);
        background-repeat: no-repeat;
        background-size:cover;
    }
    
</style>
<body class="fullpage">
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="login-register-form">
                    <div class="form-holder">
                        
                        <div class="form-row form-head">
                            <div class="col-xs-6">
                                
                            </div>
                            <div class="col-xs-6">
                                <div class="form-title"><img src="images/lock.svg" alt="">Client Area</div>
                            </div>
                        </div>
                        <div class="form-row form-links">
                            <div class="col-xs-12">
                            <?php
if (isset($_GET['error'])) {
    $errorMsg = $_GET['error'];
    echo '<p class="error-message">' . $errorMsg . '</p>';
}
?>
                            </div>
                        </div>
                        <form action="server/serverlogin.php" method="POST">
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Input Email</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-12">
                                    <label>Input Pin</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-xs-6">
                                    
                                </div>
                                <div class="col-xs-6">
                                    <div class="submit-holder">
                                        <button type="submit">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>