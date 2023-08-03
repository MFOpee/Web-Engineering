<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
        <?php
        $con = mysqli_connect('localhost', 'root','');
        if(!$con){
            echo 'Not connected to the server';
        }
        
        if(!mysqli_select_db($con, '15minutecourse')){
            echo 'Database is not connected';
        }
    
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "INSERT INTO register (username, email, password) VALUES('$username', '$email', '$password')";
        
        if(!mysqli_query($con, $sql)){
            echo 'Data is not inserted';
        }
        else{
            echo 'Data is inserted' ; 
        }

        header("refresh:2, url=register.html");
        
        ?>
        
    </body>
</html>