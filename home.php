<?php 
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['username'])) { ?>
    <!DOCTYPE html>
    <html>
        <head>    
            <title>HOME</title>    
            <link rel="stylesheet" type="text/css" href="styling/style.css">
        </head>
        <body>     
            <div class="home-page">
                <h1>Home</h1>
            <h1>Hello, <?php echo $_SESSION['fname']; ?></h1>  
            <br><br>   
                <header className="bg-white shadow p-4">
            <h1 className="text-xl font-semibold text-center">reCarify - Easy & Fast Way to Rent a Car</h1>
        </header>
        <main className="max-w-4xl mx-auto mt-8 p-6 bg-white shadow-lg rounded-lg">
            <h2 className="text-2xl font-bold">Why Choose reCarify?</h2>
            <div class="car-box">
                <img src="login-images/one.jpeg" alt="image">
                <p>car-desc</p>
                <img src="login-images/one.jpeg" alt="image">
                <p>car-desc</p>
                <img src="login-images/one.jpeg" alt="image">
                <p>car-desc</p>
            </div>
            <p className="mt-2 text-gray-600">
            We provide a seamless experience for customers looking to rent cars, offering convenience, reliability, and great service.
            </p>
            <div className="mt-6 flex space-x-4">
            <a href="rent.php">
                <button className="bg-blue-600 text-white px-6 py-3 rounded-lg">Rent a Car</button>
                </a>
            <a href="sell.php">
                <button className="bg-gray-700 text-white px-6 py-3 rounded-lg">List/Sell Your Car</button>
                </a>
                <div class="logout">
                <a href="logout.php">
                <button>Logout!</button>
                </a>
                </div>
            </div>
        </main>
        </body>
    </html>

<?php 
}
else{     
    header("Location: index.php");     
    exit();
}
