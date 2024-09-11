<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="Webc";


$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn)
{
  echo "error:".mysqli_connect_error();
  exit();
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql="select * from register where email='$email' and password='$password'";

$result = mysqli_query($conn,$sql);
if(!$result){
    echo "error".mysqli_error($conn);
    exit(); 

}
$row = mysqli_fetch_assoc($result);
if($row){
    echo $row['email']."<br/>";
    header("location:index.html");
exit;
     
}
else{
    echo 'login failed';
}


mysqli_close($conn);
?>
