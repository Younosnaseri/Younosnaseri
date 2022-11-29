<?php require_once("top.php");?>
<?php require_once("connect.php");?>
<?php 
$value;
if(isset($_GET["counter_id"])){
	$value=$_GET["counter_id"];
}
$command=("select *from counterbox where counter_id=".$value);
		$result=mysqli_query($connect,$command);
			$row_result=mysqli_fetch_assoc($result);	
?>
<section class="panel-warning">
	<section class="panel-heading"><h1>Customers Details</h1></section>
	<section class="panel-body">
<section class="input-group">
<span class="input-group-addon">	
		Counter ID:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["counter_id"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Customer Type:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["counter_id"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Coefficent:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["coefficent"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Phase:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["counter_id"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Account No:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["account_no"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Customer No:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["customer_no"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
	Customer Name :
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["customer_name"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Father Name:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["fathername"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Province:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["province_id"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Distict :
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["district"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Address :
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["address"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Junction :
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["junction"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		transformer:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["transformer"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Box No:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["box_no"];?>"readonly>
</section>
<section class="input-group">
<span class="input-group-addon">	
		Rout Code:
		</span>
		<input class="form-control"type="text"value="<?php echo $row_result["route_code"];?>"readonly>
</section>











	</section>
</section>
<?php require_once("footer.php");?>