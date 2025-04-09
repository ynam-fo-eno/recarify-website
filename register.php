<?php
// creating connection with database
include 'dbconnect.php';
// Create a connection using try-catch
try {
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    // Check if form data was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Escape and validate user inputs
        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $cPassword = $_POST['cPassword'];
        $cPassword = md5($cPassword);
        $bmonth = $_POST['bmonth'];
        $bday = $_POST['bday'];
        $byear = $_POST['byear'];
        $gender = $_POST['gender'];
        $username = $_POST['username'];

        // Basic validation
        if (empty($fname) || empty($sname) || empty($email) || empty($password) || empty($cPassword) || empty($bmonth) || empty($bday) || empty($byear) || empty($gender) || empty($username)) {
        ?>

            <script type="text/javascript">
                alert('Please fill in all fields');
                return;
            </script>

        <?php
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            ?>
            <script type="text/javascript">
                alert("Invalid email format.");
                return;
            </script>
            <?php
        } elseif ($password !== $cPassword) {
            echo "Passwords should match";
            ?>
            <script type="text/javascript">
                alert("Make sure passwords match.");
                return;
            </script>
            <?php
        } else {
            // Prepare and bind parameters
            $stmt = $conn->prepare("INSERT INTO `users` (`fname`,`sname`, `email`,`password`,`bmonth`,`bday`,`byear`,`gender`,`username` ) VALUES(?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('sssssssss', $fname, $sname, $email, $password, $bmonth, $bday, $byear, $gender, $username);

            // Execute the statement and check for success
            if ($stmt->execute()) {
                echo "Success!";
                ?>
                <script type="text/javascript">
                    alert("Success!");
                    return;
                </script>
                <?php
                header("location:index.php");
            } else {
                echo "Error: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        }
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
} finally {
    // Close the connection
    $conn->close();
}
?>



$fname=$_POST['fname'];
$sname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=md5($password);
$cPassword=$_POST['cPassword'];
$cPassword=md5($cPassword);
$bmonth = $_POST['bmonth'];
$bday = $_POST['bday'];
$byear = $_POST['byear'];
$gender = $_POST['gender'];
$username = $_POST['username'];

$insertQuery="INSERT INTO `users`VALUES ('','$fname','$sname','$email','$password','$bmonth','$bday','$byear','$gender','$username',0)";


"INSERT INTO `users` (`fname`,`sname`, `email`,`password`,`bmonth`,`bday`,`byear`,`gender`,`username` ) VALUES ('$fname','$sname','$email','$password','$bmonth','$bday','$byear','$gender','$username')"