<?php //require_once("top.php");?>
<?php
$connect=mysqli_connect("localhost","root","","breshna");
if(isset($_POST["username"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$command=("select *from users where username='$username' and password='$password'");
	$result=mysqli_query($connect,$command);
	//$row_result=mysqli_fetch_assoc($result);
	$new_result=mysqli_num_rows($result);
	
	if($new_result==1){
		header("location:home.php?login=true");
	}else{
		header("location:index.php?login=false");
	}
}
?>


<?php // require_once("footer.php");?>