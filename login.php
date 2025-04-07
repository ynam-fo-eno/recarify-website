<?php 

session_start(); 
include "dbconnect.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data){       
        $data = trim($data);       
        $data = stripslashes($data);       
        $data = htmlspecialchars($data);       
        return $data;    
    }    

    $username = validate($_POST['username']);    
    $password = validate($_POST['password']);   
    //1st inner if to test first empty input... 
    if (empty($username)) {        
        header("Location: index.php?error=User Name is required");        
        exit();    
    }

    //..and accompanying else-if to control for empty password field...
    else if(empty($password)){        
        header("Location: index.php?error=Password is required");        
        exit();    
    }

    //...and now what happens if both are filled. Now we check for correctness...
    else{        
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";        
        $result = mysqli_query($conn, $sql);        
        if (mysqli_num_rows($result) === 1) {            
            $row = mysqli_fetch_assoc($result);            
            if ($row['username'] === $username && $row['password'] === $password) { 
                echo "Logged in!";                
                $_SESSION['username'] = $row['username'];                
                $_SESSION['fname'] = $row['fname'];                
                $_SESSION['id'] = $row['id'];                
                header("Location: home.php");                
                exit();            
            }
            else{                
                header("Location: index.php?error= Password or username is incorrect.Please check again.");                
                exit();            
            }        
        }
        else{            
            header("Location: index.php?error=Incorect User name or password");            
            exit();        
        }    
    }//End of inner else for validation
}

else {    
    header("Location: index.php");    
    exit();
}
