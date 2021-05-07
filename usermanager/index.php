<?php
//file name: index.php

include("settings.php");

//Set parameters for header include
$pageTitle="User manager";
//Header include
include("header.php");

        echo'<div class="container">
    
            <form class="form-signin" method="post">';
            if($appLogo!="")
            {
                echo '<div class="row text-center">
                    <img src="'.$appLogo.'">
                    <h4>'.$appLogoName.'</h4>
                </div>
                <hr>';
            }
                echo '<h2>Nulite User Manager</h2>
                <p>Welcome to the user manager for '.$appName.', where you can manage your account.<br/><br/>
                If you need additional support, please contact: <a href="mailto:'.$emailFrom.'">'.$emailFrom.'</a>
            </form>

            <hr>
    
            <div class="row">
                <div class="span4">
                    <h2>Forgot Password</h2>
                    <p>Did you lose your password? Use the option \'Forgot password\' below to recover your password. For password recovery you need access to the e-mail you used for registering.</p>
                    <p><a class="btn" href="forgotpassword.php">Forgot password &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Change Password</h2>
                    <p>Do you want to change your password? Use the option \'Change password\' below to change your password. You need your current account details to change your password.</p>
                    <p><a class="btn" href="changepassword.php">Change password &raquo;</a></p>
                </div>
                <div class="span4">
                    <h2>Change Username</h2>
                    <p>Do you want to change your username? Use the option \'Change username\' below to change your username. You need your current account details to change your username.</p>
                    <p><a class="btn" href="changeusername.php">Change username &raquo;</a></p>
                </div>

            </div>
    
            <hr>

            <footer>
                <p>'.$copyright.'</p>
            </footer>

        </div> <!-- /container -->';


//Footer include
include("footer.php");

?>
