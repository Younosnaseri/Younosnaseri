<?php require_once("top.php");?>
<?php 
	$connect=mysqli_connect("localhost","root","","breshna");
		if(isset($_GET["employee_id"])){
			$value=$_GET["employee_id"];
		}
	$command="select *from contract where employee_id=".$value;	
		$result=mysqli_query($connect,$command);
			$record=mysqli_fetch_assoc($result);
?>
<section class="panel-info">
	<section class="panel-heading">Contract List</section>
	<section class="panel-body">
	<table class="table table-striped">
		<tr>
		<th>Contract ID</th>
		<th>Start Date </th>
		<th>End Date </th>
		<th>Postion </th>
		<th>Gross Sarary </th>
		</tr>
		<?php do{ ?>
			<tr>
			<td><?php echo $record["contract_id"]; ?></td>
			<td><?php echo $record["employee_id"]; ?></td>
			<td><?php echo $record["start_date"]; ?></td>
			<td><?php echo $record["end_date"]; ?></td>
			<td><?php echo $record["position"]; ?></td>
			<td><?php echo $record["gross_salary"]; ?></td>
			</tr>
		<?php }while($record=mysqli_fetch_assoc($result)); ?>
	</table>
	</section>
</section>
<?php require_once("footer.php");?>