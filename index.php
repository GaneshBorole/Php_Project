    <?php
    if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);
    if (!$con) {
        die("connection to db failed due to".mysqli_connect_error());
    }
    //echo "successful connecting to db"; 
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `ganesh`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    echo $sql;
    
    if ($con -> query($sql)== true) {
        echo "successfully inserted";
    
    }
    else{
        echo"ERROR:$sql <br> $con->error";
    }
    $con->close();
    }
    ?>

