<?php
	<?php $connect=mysqli_connect("localhost","root","","breshna");?>
	$province_id="select *from province";

	$province_result=mysqli_query($connect,$province_id);
	$value=mysqli_fetch_assoc($province_result);
	// --------------emoloyee Degree Query --------------------

		$degree_vlaue="select *from emp_degree";
			$degree_resutl=mysqli_query($connect,$degree_vlaue);
				$degree_fetch=mysqli_fetch_assoc($degree_resutl);

		// ------end of employee degree query-------------------


	if(isset($_POST["firstname"])){
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$fathername=$_POST["fathername"];
		$gender=$_POST["gender"];
		$birth_year=$_POST["birth_year"];
		$nic=$_POST["nic"];
		$marital=$_POST["marital"];
		$province=$_POST["province"];
		$district=$_POST["district"];
		$address=$_POST["address"];
		$emial=$_POST["emial"];
		$degree=$_POST["degree"];
		$hire_date=date("Y-m-d");
		if($_FILES["photo"]["name"]!=""){
			$type=$_FILES["photo"]["name"];
			//if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif"){
			$path="images/employee/".time().$_FILES["photo"]["name"];
			move_uploaded_file($_FILES["photo"]["tmp_name"],$path);
		//}else{
			//header("location:employee_add.php?filetype=incorrect");
			//exit();
		}else{
			if($gender==0){
				$path="images/employee/user_m.png";
			}else{
		        $path="images/employee/user_f.png";
	
			}
		}
		
		$command=("insert into employee values(null,'$firstname','$lastname','$fathername',$gender,
		'$birth_year','$nic',$marital,'$province','$district',
		'$address','$emial','$degree','$path ','$hire_date',null)");
		$result=mysqli_query($connect,$command);
			if($result){
				header("location:employee_list?insert=true");
			}else{
				header("location:employee_add.php?insert=false");
			}
		}
?>