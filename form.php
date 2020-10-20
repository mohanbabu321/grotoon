<html>
<?php

$n=$_POST['name'];
$h=$_POST['age'];
$e=$_POST['count'];
$y=$_POST['dob'];
$r=$_POST['male'];
$z=$_POST['female'];
$a=$_POST['s'];
$b=$_POST['color'];
$c=$_POST['add'];
$host="localhost";
$user="root";
$pass="";
$db="form";
$conn=new mysqli($host,$user,$pass,$db);

$ins=mysqli_query($conn,"INSERT into form VALUES('$n','$h','$e','$y','$r','$z','$a','$b','$c')");
if($ins=='1'){
    echo"<script>window.location.href='log.php'</script>";
}



?>

</html>
