<?php require_once("top.php");?>
<?php
$connect=mysqli_connect("localhost","root","","breshna");
if(!isset($_GET["page"])){
	header("location:employee_list.php?page=1");
}
$condition="";
if(isset($_GET["q"])){
	$keyword=($_GET["q"]);
$condition = "where employee_id='$keyword' OR firstname LIKE '%$keyword%' OR lastname LIKE '%$keyword%'";	
}
$count_employee=("select count(employee_id) as total from employee");
$allEmployee=mysqli_query($connect,$count_employee);
$take_allEmployee=mysqli_fetch_assoc($allEmployee);
$totalrow=$take_allEmployee["total"];
$rowperpage=2;
$totalpage=ceil($totalrow/$rowperpage);
$offset=($_GET["page"]-1)*$rowperpage;
$employee="select *from employee inner join emp_degree on emp_degree.degree_id=employee.degree_id $condition  order by employee_id limit $offset,$rowperpage";
$result=mysqli_query($connect,$employee); 
	$fetch_employee=mysqli_fetch_assoc($result);
	$totalRows=mysqli_num_rows($result);
?>
<section class="panel panel-danger">
	<section class="panel-heading"><h1>Employee List</h1>
	<section class="pull-right"id="search">
	<form method="get">
	<input type="text"name="q">
	<input type="hidden" name="page" value="<?php echo $_GET["page"]; ?>">
	<input type="submit"value="search"class="btn btn-primary">
	</form>
	</section>
	</section>
	<section class="panel-body">
		<table class="table table-striped">
		<?php if(isset($_GET["q"])){ ?>
		<section class="">
			<big>Total Result</big> <strong><?php echo $totalRows;?></strong>
		</section>
		<?php }?>
			<tr>
					<th>ID</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Fathername</th>
					<th>Degree</th>
					<th>Photo</th>
					<th>Edit</th>
					<th>Delete</th>
					<th>Contract</th>
			</tr>
			<?php if($totalRows>0){ ?>
			    <?php do{?>
			    	<tr>
			    			<td><?php echo $fetch_employee["employee_id"]; ?></td>
			    			<td><?php echo $fetch_employee["firstname"]; ?></td>
			    			<td><?php echo $fetch_employee["lastname"]; ?></td>
			    			<td><?php echo $fetch_employee["fathername"]; ?></td>
			    			<td><?php echo $fetch_employee["degree_id"]; ?></td>
			    			<td><img src="<?php echo $fetch_employee["photo"]; ?>"width="50"></td>
			    			<td><a href="employee_update.php?employee_id=<?php echo $fetch_employee["employee_id"]; ?>">Upadate</a></td>
			    			<td><a href="employee_delete.php?employee_id=<?php echo $fetch_employee["employee_id"]; ?>">Delete</a></td>
			    			<td><a href="contract_employee.php?employee_id=<?php echo $fetch_employee["employee_id"]; ?>">Contract</a></td>	
                     </tr
				<?php }while($fetch_employee=mysqli_fetch_assoc($result));?>
			<?php }else{?>
			<section class="pull-right">
			<h2 style="color:orange;font-size:20px;">No Result Found!!</h2>
			</section>
			<?php }?>
		</table>
		<section class="pagination">
		<ul class="pagination">	
		<li><a href="employee_list.php?page=1">First</a></li>
		<li>
		<?php if($_GET["page"]!=1){?>
		<a href="employee_list.php?page=<?php echo ($_GET["page"]-1); ?>">Previous</a>
		<?php }else{?>
		<a>Previous</a>
		
		<?php }?>
		</li>
		<li>
			<?php if($_GET["page"] != $totalpage) { ?>
				<a href="employee_list.php?page=<?php echo $_GET["page"]+1; ?>">Next</a>
				<?php } else { ?>
				<a>Next</a>
				<?php } ?>
				</li>
		<li><a href="employee_list.php?page=<?php echo $totalpage;?>">Last</a></li>
		</ul>
		</section>
		<section class="pull-right">
		Total Page <?php echo ($_GET["page"]);?>
		</section>
	</section>
	</section>
<?php require_once("footer.php");?>