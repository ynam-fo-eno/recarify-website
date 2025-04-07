<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css"  href="style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" >
</head>
<body>

    <div class="container">
            <div class="form-box login">
                <form action="login.php" method="post">
                    <h1>Login</h1>
                        <!-- inner script to check for errors-->   
                    <?php
                            if(isset($_GET['error'])){ ?>
                            <p class="error"> <?php echo $_GET['error']; ?></p>
                    <?php }?> 
                    <div class="input-box">
                        <input type="text" name= "username" placeholder="Username" required><br>
                        <i class='bx bxs-user-rectangle'></i>
                    </div>
                    <div class="input-box">
                        <input type="password" name= "password" placeholder="Password" required><br>
                        <i class='bx bxs-lock'></i>
                    </div>
                    <div class="forgot-link">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn" >Login</button>
                    <p>Or login via other platforms below</p>
                    <div class="social-icons">
                        <a href="#"><i class='bx bxs-envelope'></i></a>
                        <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                        <a href="#"><i class='bx bxl-github' ></i></a>
                    </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="" method="">
                <h1>Register</h1>
                <div class="input-box">
                    <input type="text" placeholder="Username" required>
                    <i class='bx bxs-user-rectangle'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
            
                <button type="submit" class="btn" >Register</button>
                <p>Register using other platforms below</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxs-envelope'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="#"><i class='bx bxl-github' ></i></a>
                    <a href="#"><i class='bx bxl-google' ></i></a>

                </div>
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Welcome to Recarify!</h1>
                <p>No account? Click here!</p>
                <button type="button" class="btn register-btn">Register</button>
            </div>
        
            <div class="toggle-panel toggle-right">
                <h1>Welcome back!</h1>
                <p>Have an account already?</p>
                <button type="button" class="btn login-btn">Login</button>
            </div>
        </div>       
    </div>
    <script src="script.js"></script>
</body>
</html>

