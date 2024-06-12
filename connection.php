<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "ganeshdecoration";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $uname = $_POST['uname'];  
    $psw = $_POST['psw'];  
      
        //to prevent from mysqli injection  
        $uname = stripcslashes($uname);  
        $psw = stripcslashes($psw);  
        $uname = mysqli_real_escape_string($con, $uname);  
        $psw = mysqli_real_escape_string($con, $psw);  
      
        $sql = "select *from login where uname = '$uname' and psw = '$psw'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
             header("Location: http://localhost/NewWeb/adminuser.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  