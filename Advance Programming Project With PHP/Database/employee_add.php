<?php $connect=mysqli_connect("localhost","root","","breshna");?>
<?php require_once("top.php");?>
<?php
	
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
<form  action="" method="post" enctype="multipart/form-data">
<section class="panel panel-info">
	<section class="panel-heading">New Employee</section>
	<section class="paenel panel-body">
		<!-- ---------------------------- -->
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
	<input class="form-control" type="text"name="firstname">
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Lastname:</span><input  class ="form-control"type="text"name="lastname">
	</section>

		<section class="input-group">
	<span class="input-group-addon">
	FatherName:
	</span><input  class="form-control"type="text"name="fathername">
	</section>
		<section class="input-group">
	Gender:Male:<input type="radio"name="gender"value="0"checked="checked">
	        Female:<input type="radio"name="gender"value="1">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Birth Year:</span><select class="form-control" name="birth_year">
		<?php
			$max=date("Y")-18;
			$min=date("Y")-65;			
			for ($x=$max; $x>$min ;$x--){
			print("<option>$x</option>");
		}
		?>
	</select>
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Nic:</span><input  class="form-control"type="text"name="nic">
	</section>
	<section class="input-group">
	Marital Singel:<input type="radio"name="marital"value="0">
	Marital Marrid:<input  type="radio"name="marital"value="1">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Province:</span><select name="province">
		<?php do{?>
		<option value="<?php echo $value["province_id"];?>"><?php echo $value["province_name"];?></option>
	<?php }while($value=mysqli_fetch_assoc($province_result));?>
	</select>
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	District :</span><input class="form-control"type="text"name="district">
	</section>
		<section class="input-group">
	<span class="input-group-addon">
	Address:</span><textarea class="form-control"cols="3"rows="3"name="address"></textarea>
	</section>

	<section class="input-group">
	<span class="input-group-addon">
	Email:</span>
	<input class="form-control"type="text"name="emial">
	</section>

<section class="input-group">
	<span class="input-group-addon">
		
	Degree:
	<span>

<?php do{?>
		<select  name="degree">
		<option value="<?php echo $degree_fetch["degree_id"]?>"><?php echo $degree_fetch["degree_name"]; ?></
	<?php }while($degree_fetch=mysqli_fetch_assoc($degree_resutl));?>
	<option>
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