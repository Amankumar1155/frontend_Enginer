<?php
include 'config.php';

if(isset($_POST['submit']))
{

$img=$_FILES['img']['name'];
$name=$_POST['name'];
$price=$_POST['price'];


$sql="INSERT INTO `product`(`id`, `img`, `name`, `price`, `created`) VALUES (null,'$img','$name','$price',now())";

if(mysqli_query($conn,$sql))
{
    move_uploaded_file($_FILES['img']['tmp_name'],"../../assets/images/".$img);
    echo "<script>alert('Thank you! Your submission has been sent.');window.location.href='../product.php'</script>";
}
}

?>