<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
    <!DOCTYPE html>
    <html>
        <head>    
            <title>HOME</title>    
            <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>     
            <div class="home-page">
            <h1>Hello, <?php echo $_SESSION['fname']; ?></h1>  
            <br><br>   
            <button type="submit" >Logout</button>
            <br><br>
            <a href="logout.php">Logout</a>
            </div>
          
        </body>
    </html>

<?php 
}
else{     
    header("Location: index.php");     
    exit();
}
