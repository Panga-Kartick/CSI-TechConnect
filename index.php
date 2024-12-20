<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/index.css">
   
    <title>Computer Society Of India | Login & Registration</title>
</head>

<body>
   


    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo">
                <p>CSI TechConnect</p>
            </div>
            
             <!-- Toggle between User and Admin Login using links -->
             <div class="login-toggle">
                <a href="index.html" >User Login</a>
                <a href="adminindex.html" >Admin Login</a>
            </div>
            
        </nav>
        
        
        <!----------------------------- Form box ----------------------------------->
        <div class="form-box">

            <!------------------- login form -------------------------->
            <div class="login-container" id="login">
                <div class="top">
                    <span>Don't have an account?<a href="register.html" class="nav-link">Register here</a></span>
                    <header>User Login</header>
                </div>
                <form action="login.php" method="POST">
                    <div class="input-box">
                        <input type="id" class="input-field" placeholder="CSI-ID" name="id" required>
                        <i class="bx bx-envelope"></i>
                    </div>
                    <div class="input-box">
                        <input type="password" class="input-field" placeholder="Password" name="password" required>
                        <i class="bx bx-lock-alt"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Sign In">
                    </div>
                </form>
                <div class="two-col">
                    <div class="two">
                        <label><a href="checkid.html">Check your ID?</a></label>    
                    </div>
                    <div class="two">
                        <label><a href="password.html">Change password?</a></label>
                    </div>
                </div>
            </div>

            <div id="notificationBox" class="notification" style="display: none;">
            <?php if (isset($_SESSION["login_notification"])): ?>
        <div class="notification">
            <?php echo $_SESSION["login_notification"]; ?>
        </div>
        <?php unset($_SESSION["login_notification"]); ?>
    <?php endif; ?>
</div>
        </div>
    </div>
    <script>

        function myMenuFunction() {
            var i = document.getElementById("navMenu");
            if (i.className === "nav-menu") {
                i.className += " responsive";
            } else {
                i.className = "nav-menu";
            }
        }
        var a = document.getElementById("loginBtn");
        var b = document.getElementById("registerBtn");
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        function login() {
            x.style.left = "4px";
            y.style.right = "-520px";
            a.className += " white-btn";
            b.className = "btn";
            x.style.opacity = 1;
            y.style.opacity = 0;
        }
        function register() {
            x.style.left = "-510px";
            y.style.right = "5px";
            a.className = "btn";
            b.className += " white-btn";
            x.style.opacity = 0;
            y.style.opacity = 1;
        }

        function showNotification(message, type) {
            var notificationBox = document.getElementById('notificationBox');
            notificationBox.textContent = message;
            notificationBox.className = 'notification ' + type;
            notificationBox.style.display = 'block';

            // Hide the notification after 3 seconds
            setTimeout(function () {
                notificationBox.style.display = 'none';
            }, 3000);
        }
        // your existing JavaScript code
    </script>
</body>

</html>