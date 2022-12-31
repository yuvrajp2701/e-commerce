<?php

$Servername= "localhost";
$username="root";
$password="";
$dbname="userlogin";

$eid= "eid";
$pass= "pass";
$uname= "uname";
$pno= "pno";
$rpass="rpass";



$conn= mysqli_connect($Servername,$username,$password,$dbname);

if($pass == $rpass)
{
    
    $sql ="INSERT INTO `login` (`EmailId`, `Password`, `User Name`, `phone number`) VALUES ('$eid', '$pass', '$uname', '$pno')";

    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo"data successfully inserted.";
        
    }
else{
echo"data was not successfully inserted.";

    
    }
}
if($conn)
{
    echo"Connection OK";
}
else
{
    echo"connection failed".mysqli_connect_error();
}
?>