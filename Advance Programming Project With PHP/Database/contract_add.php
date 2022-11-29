<?php require_once("top.php");?>
<?php 
	$connect=mysqli_connect("localhost","root","","breshna");
		$command=("select concat(firstname,' ',lastname) as emploee_name ,employee_id from employee order 
		by firstname asc,lastname asc");
		$result=mysqli_query($connect,$command);
		$employee=mysqli_fetch_assoc($result);
		
		if(isset($_POST["emp_id"])){
			$emp_id=$_POST["emp_id"];
			$start_date=$_POST["start_date"];
			$end_date=$_POST["end_date"];
			$position=$_POST["position"];
			$gross_salary=$_POST["gross_salary"];
			$command=("insert into contract values(null,$emp_id,'$start_date',
			'$end_date','$position',$gross_salary)");
			
				$result_value=mysqli_query($connect,$command);
					if($result_value){
						header("location:contract_add.php?contract=done");
					}else{
						header("location:contract_add.php?nocontract=done");
					}
				
				
		}
?>
<section class="panel-warning">
	<section class="panel-heading">Add New Contract</section>
	<form action=""method="post">
	<section class="panel-body">
	<section class="input-group">
	<span class="input-group-addon">
	Employee ID
	</span>
	<select class="form-control" name="emp_id">
	<?php do{?>
	<option value="<?php echo $employee["employee_id"];?>"><?php echo $employee["emploee_name"]; ?></option>
	<?php }while($employee=mysqli_fetch_assoc($result));?>
	</select>
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Strat Date:
	</span>
	<input  class="form-control"type="Text"name="start_date">
	</section>
	<section class="input-group">
		<span class="input-group-addon">
			End Date:
		</span>
		<input class="form-control" type="Text"name="end_date">
	</section>
	<section class="input-group">
		<span class="input-group-addon">
			Position:
		</span>
		<input class="form-control"	type="Text"name="position">
	</section>
	<section class="input-group">
	<span class="input-group-addon">
	Gross Salary :
	</span>
	<input class="form-control" type="text"name="gross_salary">
	</section>
	<section class="input-group">
		<input class="btn btn-primary"type="submit"value="Add Contract">
	</section>
	</section>
	</form>
</section>
<?php require_once("footer.php");?>