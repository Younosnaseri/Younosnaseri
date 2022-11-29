<?php ?>
<?php 
$connect=mysqli_connect("localhost","root","","breshna");
$province=("SELECT * FROM province");
$provincevalue=mysqli_query($connect,$province);
$provincerow=mysqli_fetch_assoc($provincevalue);
if(isset($_POST["counter_id"])){
$counter_id=$_POST["counter_id"];
$customer_type=$_POST["customer_type"];
$ccoeffcient=$_POST["coefficient"];
$phase=$_POST["phase"];
$account_no=$_POST["account_no"];
$customer_no=$_POST["customer_no"];
$customer_name=$_POST["customer_name"];
$fathername=$_POST["father_name"];
$province_id=$_POST["province_id"];
$district=$_POST["district"];
$address=$_POST["address"];
$junction=$_POST["junction"];
$transformer=$_POST["transformer"];
$box_no=$_POST["box_no"];
$route_code=$_POST["route_code"];
$command=("INSERT INTO counterbox VALUES($counter_id,$customer_type,
$ccoeffcient,$phase,$account_no,$customer_no,
'$customer_name','$fathername',$province_id,
'$district','$address','$junction','$transformer'
,'$box_no','$route_code');");
$result=mysqli_query($connect,$command);
if($result){
header("Location:customer_list.php?insert=done");
}else{
header("Location:customer_list.php?notinsert=true");
}
}
?>
<?php require_once("top.php");?>
<div class="panel panel-info">
<div class="panel-heading">
<h1 align="center">Customer Registration Form</h1>
</div>
<div class="panel-body">
<form method="post">
<div class="input input-group"><span class="input input-group-addon">
Counter ID :</span><input type="text" name="counter_id" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Customer Type :</span> <label>&nbsp;Personal&nbsp;<input type="radio" checked="checked" name="customer_type" value="1"></label><label>&nbsp;Commercial&nbsp;<input type="radio" name="customer_type" value="0"></label>
</div>
<div class="input input-group"><span class="input input-group-addon">
Coefficient :</span><input type="text" name="coefficient" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Phase :</span><input type="text" name="phase" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Acount NO :</span><input type="text" name="account_no" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Customer NO :</span><input type="text" name="customer_no" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Customer Name :</span><input type="text" name="customer_name" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Father Name :</span><input type="text" name="father_name" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Province :</span><select name="province_id" class="form-control">
<div class="input input-group"><span class="input input-group-addon">
<?php do { ?>
			<option value="<?php echo $provincerow["province_id"]; ?>"><?php echo $provincerow["province_name"]; ?></option>
<?php }while($provincerow=mysqli_fetch_assoc($provincevalue)); ?>
</select>
</div>
<div class="input input-group"><span class="input input-group-addon">
District :</span><input type="text" name="district" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Address :</span><textarea rows="4" name="address" class="form-control"></textarea></div>
<div class="input input-group"><span class="input input-group-addon">
junction :</span><input type="text" name="junction" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Transformer :</span><input type="text" name="transformer" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Box NO :</span><input type="text" name="box_no" class="form-control"></div>
<div class="input input-group"><span class="input input-group-addon">
Route Code :</span><input type="text" name="route_code" class="form-control"></div>
<input type="submit" value="Register" class="btn btn-primary">
</form>
</div>
</div>
<?php require_once("footer.php");?>
