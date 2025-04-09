<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styling/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
</head>

<body>

    <div class="container">
        <div class="form-box login">
            <form action="login.php" method="post">
                <h1>Login</h1>
                <!-- inner script to check for errors-->
                <?php
                if (isset($_GET['error'])) { ?>
                    <p class="error"> <?php echo $_GET['error']; ?></p>
                <?php } ?>
                <div class="input-box">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <i class='bx bxs-user-rectangle'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required><br>
                    <i class='bx bxs-lock'></i>
                </div>
                <div class="forgot-link">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" name= "signIn" class="btn">Login</button>
                <p>Or login via other platforms below</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxs-envelope'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </form>
        </div>

        
        <div class="form-box register">
            <form action="register.php" method="post">
                <h1>Register</h1>
                <div class="reg-box">
                    <input type="text" name="fname" placeholder="First Name" required>
                    <i class='bx bxs-user-rectangle'></i>
                    <input type="text" name="sname" placeholder="Second Name" required>
                    <i class='bx bxs-user-rectangle'></i>
                </div>
                <div class="reg-box">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user-rectangle'></i>
                </div>
                <div class="reg-box">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bxs-lock'></i>
                    <input type="password" name="cPassword" id="confirmPassword" placeholder="Confirm Password" required>
                    <i class='bx bxs-lock'></i>
                </div>
                <p class="password-hint">Use 8 or more characters with a mix of letters, numbers & symbols</p>
                <div class="reg-box">
                    <p class="birthday-gender">Enter your birthday & gender</p>
                    <label for="month"></label>
                    <input type="text" name="bmonth" id="month" placeholder="Month" required>
                    <label for="day"></label>
                    <input type="text" name="bday" id="day" placeholder="Day" required>
                    <label for="year"></label>
                    <input type="text" name="byear" id="year" placeholder="Year" required>
                </div>
                <div class="reg-box">
                    <select name="gender" id="gender">
                        <option>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Rather Not Say</option>
                    </select>
                </div>
                <button type="submit" name="register" class="btn">Register</button>
                <p>Register using other platforms below</p>
                <div class="social-icons">
                    <a href="#"><i class='bx bxs-envelope'></i></a>
                    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
                    <a href="#"><i class='bx bxl-github'></i></a>
                    <a href="#"><i class='bx bxl-google'></i></a>

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
    <script src="js-scripts/script.js"></script>
</body>

</html>