<?php require_once("top.php");?>

<?php
	$connect=mysqli_connect("localhost","root","","breshna");
	$province_id="select *from province";

	$province_result=mysqli_query($connect,$province_id);
	$value=mysqli_fetch_assoc($province_result);
	// --------------emoloyee Degree Query --------------------

		$degree_vlaue="select *from emp_degree";
			$degree_resutl=mysqli_query($connect,$degree_vlaue);
				$degree_fetch=mysqli_fetch_assoc($degree_resutl);

		// ------end of employee degree query-------------------
		//Update Employee
		$value1;
			if(isset($_GET["employee_id"])){
						$value1=$_GET["employee_id"];		
			}
			$update_employee=("select *from employee where employee_id=".$value1);
			$update_result=mysqli_query($connect,$update_employee);
				$new_result=mysqli_fetch_assoc($update_result);
				
		//End update Employee
		
		


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
		
		
		/*$command=("insert into employee values(null,'$firstname','$lastname','$fathername',$gender,
		'$birth_year','$nic',$marital,'$province','$district',
		'$address','$emial','$degree','$path ','$hire_date',null)");
		$result=mysqli_query($connect,$command);
			if($result){
				header("location:employee_list?insert=true");
			}else{
				header("location:employee_add.php?insert=false");
			}
		}
	
		*/
		
		$employee_update=("update employee set firstname='$firstname'lastname='$lastname'fathername='$fathername'gender=$gender 
			birth_year=$birth_year nic='$nic'marital_status=$marital
			province='$province'district='$district'address='$address'email='$emial'degree='$degree'hire_date='$hire_date'photo='$path'resgin_date=null
			where employee_id=".$value1);
			$employee_fetch_assco=mysqli_query($connect,$employee_update);
			if($employee_fetch_assco){
					header("location:employee_list.php?update=done");
			}else{
				header("location:employee_add.php?noupdate=true");
			}
	}
			
?>
<form  action="" method="post" enctype="multipart/form-data">
<section class="panel panel-info">
	<section class="panel-heading">Update Empoyee </section>
	<section class="paenel panel-body">
		<!-- ---------------------------- -->
		<?php if(isset($_GET["noupdate"])){?>
		<section class="alert alert-danger alert-dismissable">
		<button class="close">
		Error! Could Not Update! Please Try Again!
		</button>
		</section>
		<?php }?>
		
		<?php if(isset($_GET["insert"])) {?>
			<section class="alert alert-danger alert-dismissable">
		<button class="close" area-hidden="true" data-dismiss="alert">&times;</button>
				Error Could Not Insert!!!
			</section>
		<?php  } ?>
		<!-- ----------------------------- -->
       <?php if(isset($_GET["filetype"])) {?>
			<section class="alert alert-danger alert-dismissable">
		<button class="close" area-hidden="true" data-dismiss="alert">&times;</button>
				Invalid File Type!
			</section>
		<?php  } ?>
		<!-- ----------------------- -->
	<section class="input-group">
	<span class="input-group-addon">
	Firsrname:
	</span>
	<input value="<?php echo $new_result["firstname"];?>" class="form-control" type="text"name="firstname">
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Lastname:</span><input value=" <?php echo $new_result["lastname"];?>"  class ="form-control"type="text"name="lastname">
	</section>

		<section class="input-group">
	<span class="input-group-addon">
	FatherName:
	</span><input value=" <?php echo $new_result["fathername"];?>"  class="form-control"type="text"name="fathername">
	</section>
		<section class="input-group">
	Gender:Male:<input
		<?php if($new_result["gender"]==0)echo "cheched='cheched'";?>type="radio"name="gender"value="0">
	        Female:<input 
		<?php if($new_result["gender"]==1)echo "checked='cheched'"; ?>type="radio"name="gender"value="1">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Birth Year:</span><select class="form-control" name="birth_year">
		<?php
			$max=date("Y")-18;
			$min=date("Y")-65;
			for ($x=$max; $x>$min ;$x--){
			if($new_result["birth_year"]==$x){
				echo "<option selected>$x</option>";
			}else{
				print("<option>$x</option>");
			}
		}
		?>
	</select>
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Nic:</span><input value="<?php echo $new_result["nic"]; ?>";  class="form-control"type="text"name="nic">
	</section>
	<section class="input-group">
	Marital Singel:<input
	<?php if($new_result["marital_status"]==0) echo "cheched='cheched'";?>
	type="radio"name="marital"value="0">
	 Marrid:<input 
	<?php if($new_result["marital_status"]==1) echo "cheched='cheched'";?>
		type="radio"name="marital"value="1">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Province:</span><select name="province">
		<?php do{?>
		<?php if($new_result["province_id"]==$value["province_id"]){?>
		
		<option value="<?php echo $value["province_id"];?>"><?php echo $value["province_name"];?></option>
		<?php }else {?>
		
		<option value="<?php echo $value["province_id"];?>"><?php echo $value["province_name"];?></option>

		<?php }?>
		
	<?php }while($value=mysqli_fetch_assoc($province_result));?>
	
	</select>
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	District :</span><input value="<?php echo $new_result["district"];?> "class="form-control"type="text"name="district">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Address:</span><textarea class="form-control"cols="3"rows="3"name="address"><?php echo $new_result["address"] ;?></textarea>
	</section>

	<section class="input-group">
	<span class="input-group-addon">
	Email:</span>
	<input value="<?php echo $new_result["email"];?>" class="form-control"type="text"name="emial">
	</section>

<section class="input-group">

		
	Degree:
	<select name="degree">
	<?php do{ ?>
	<?php if($new_result["degree_id"]==$degree_fetch["degree_id"]){?>
	<option value="<?php echo $degree_fetch["degree_id"];?>"><?php echo $degree_fetch["degree_name"] ?></option>
	<?php }else {?>
	<option value="<?php echo $degree_fetch["degree_id"];?>"><?php echo $degree_fetch["degree_name"] ?></option>
	<?php }?>
	<?php }while($degree_fetch=mysqli_fetch_assoc($degree_resutl)); ?>
	</select>
	</section>

	
		<section class="input-group">
	<span class="input-group-addon">
	Photo:</span><input  type="file"name="photo">
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Hire Date:</span><input class="form-control" type="text"name="h_date">
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Resign Date:</span><input class="form-control" type="text"name="r_date">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	<input type="submit"value="Rigester">
	</section>
	</section>
</section>
</form>
<?php require_once("footer.php");?>