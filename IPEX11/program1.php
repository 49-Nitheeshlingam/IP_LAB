<?php
    $conn=mysqli_connect('localhost','root','','ex11');

    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        if(empty($name)||empty($pass)){
            echo 'Enter Username and Password';
        }
        elseif(strlen($pass)<8){
            echo 'Password should be atleast 8 characters';
        }
        else{
            $insert_query=mysqli_query($conn,"INSERT INTO users(user_name,password) VALUES('$name','$pass')");
            echo 'Data are Inserted into database successfully';
        }
    }
?>

<html>
    <head>
        <title>EX 11 Program</title>
    </head>
    <body>
        <form method="post">
            Username:<input type="text" name="name" placeholder="Enter Username"><br>
            Password:<input type="password" name="pass" placeholder="Enter Password"><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>