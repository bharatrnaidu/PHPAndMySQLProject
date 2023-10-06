<?php
session_start();
define("APPURL", "http://localhost/forum");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome To Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo APPURL; ?>/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo APPURL; ?>/css/custom.css" rel="stylesheet">
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- 'Forum' hyperlink will redirect user to 'index.php' page -->
                <a class="navbar-brand" href="<?php echo APPURL; ?>">Forum</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- 'Home' hyperlink will redirect user to 'index.php' page -->
                    <li class="active"><a href="<?php echo APPURL; ?>">Home</a></li>

                    <!-- if session is having data display 'below' option.  -->
                    <?php if (isset($_SESSION['username'])) :  ?>
                        <li><a href="<?php echo APPURL; ?>/topics/create.php">Create Topic</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <!-- Below code will display username in navbar from session -->
                                <?php echo $_SESSION['username']  ?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                            </ul>
                        </li>

                        <!-- if session is not having data display 'below' option. -->
                    <?php else : ?>
                        <li><a href="<?php echo APPURL; ?>/auth/register.php">Register</a></li>
                        <li><a href="<?php echo APPURL; ?>/auth/login.php">Login</a></li>

                        <!-- end of condition in php -->
                    <?php endif;  ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>