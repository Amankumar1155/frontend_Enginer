<?php
include 'config.php';

session_start();

if(isset($_POST['submit']))
{
$username=$_POST['uname'];
$password=$_POST['password'];



$sql="SELECT * FROM `admin` WHERE username='$username' and password='$password'";
$res=mysqli_query($conn,$sql);

if($row=mysqli_fetch_array($res,MYSQLI_BOTH))
{
echo $_SESSION['username']=$username;
echo $_SESSION['id']=$row['id'];
echo "<script>window.location.href='../home.php'</script>";
}
else
{
echo "<script>alert('Username Or Password Are Incorrect!');window.location.href='../index.php'</script>";
}
}

?>