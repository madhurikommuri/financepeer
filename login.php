<?php
include("config.php");

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($mysqli,"select* from user where uname='$uname'and upassword='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
//header("location:insert.php");   // create my-account.php page for redirection

}
else
{
	echo "failed ";
}
}
?>