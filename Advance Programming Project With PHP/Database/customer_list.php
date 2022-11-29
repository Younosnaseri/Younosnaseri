<?php require_once("top.php");?>
<?php 
	$connect=mysqli_connect("localhost","root","","breshna");
		$command=("select *from counterbox");
			$result=mysqli_query($connect,$command);
				$row_result=mysqli_Fetch_Assoc($result);		
?>
<section class="panel-info">
	<section class="panel-heading">Customer List</section>
	<section class="panel-body">
		<table class="table table-stiped">
		<tr>
			<th>Counter ID</th>
			<th>Customer Name </th>
			<th>Customer Type </th>
			<th>Account No </th>
			<th>Coeffcient </th>
		</tr>
		<?php do{?>
			<?php $customer_type="";
	if($row_result["customer_type"]==1){
			$customer_type="Personal";
	}else{
			$customer_type="Commercial";
	}
	?>
			<tr>
				<td><?php echo $row_result["counter_id"]; ?></td>
				<td><?php echo $row_result["customer_name"]; ?></td>
				<td><?php echo $row_result["customer_type"]; ?></td>
				<td><?php echo $row_result["account_no"]; ?></td>
				
				<td><a href="customer_details.php?counter_id=<?php echo $row_result["counter_id"];?>">Details</a></td>
			</tr>
		<?php }while($row_result=mysqli_Fetch_Assoc($result));?>
		</table>
	</section>
</section>
<?php require_once("footer.php");?>