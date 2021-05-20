<?php
$n=$_POST["n"];
$f=$_POST["f"];
$cod=$_POST["cod"];
$ray=$_POST["ray"];
$db=mysqli_connect('localhost','root','','entekhabat');
$chek=mysqli_query($db,"SELECT * FROM `ara` WHERE `cod`='$cod'");
if(mysqli_num_rows($chek)==0)
{
$sql="INSERT INTO ara(name,family,cod,ray) VALUES('{$n}', '{$f}', '{$cod}', '{$ray}')";
mysqli_query($db,$sql);
}
else
mysqli_query($db,"UPDATE `ara` SET `name`='$n',`family`='$f',`ray`='$ray' WHERE `cod`='$cod'");
?>