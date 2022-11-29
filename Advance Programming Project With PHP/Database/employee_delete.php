<?php
	$connect=mysqli_connect("localhost","root","","breshna");

		if(isset($_GET["employee_id"])){
			$delete=$_GET["employee_id"];
	$command=("delete from employee where employee_id=".$delete);
		$photo=("select photo from employee where employee_id=".$delete);
			$photo_result=mysqli_query($connect,$photo);
			$fetch_photo=mysqli_fetch_assoc($photo_result);
				if(!$fetch_photo["photo"]=="images/employee/user_m.png"|| $fetch_photo["photo"]=="images/employee/user_f.png");
				unlink($fetch_photo["photo"]);

	    mysqli_query($connect,$command);
			header("location:employee_list.php?delete=done");
	}
?>