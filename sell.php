<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
    <!DOCTYPE html>
    <html>
        <head>    
            <title>Rent</title>    
            <link rel="stylesheet" type="text/css" href="styling/style.css">
        </head>
        <body>     
            <h1>Dear <?php echo $_SESSION['fname']; ?>, you can sell here</h1>     
            <a href="logout.php">Logout</a></body>
    </html>

<?php 
}
else{     
    header("Location: index.php");     
    exit();
}