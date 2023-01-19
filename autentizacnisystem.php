<?php
    if(isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        
        $conn = new mysqli("localhost", "username", "password", "database");

        
        $result = $conn->query("SELECT * FROM users WHERE username='$username' AND password='$password'");

        if($result->num_rows > 0) {
            
            $user = $result->fetch_assoc();
            echo "Welcome, " . $user['username'] . ". Your user type is: " . $user['user_type'];
        } else {
        
            echo "Incorrect username or password. Please try again.";
        }
    }
?>
