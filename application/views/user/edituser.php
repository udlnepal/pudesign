
<?php $attributes = array("name" => "edituserform");
echo form_open("user/edituser", $attributes);?>
<?php if(isset($msg)){
	echo "<span class='success'>".$msg."</span>";
}
if(isset($emsg)){
	echo "<span class='error'>".$emsg."</span>";
}
?>
<div class="jumbotron">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6">
<table class="table table-borderd">
	<tr><td>Old Password</td><td><input type="password" class="form-control" name="old_password"></td></tr>
	<tr><td>New Password</td><td><input type="password" class="form-control" name="new_password"></td></tr>
	<tr><td>Confirm New Password</td><td><input type="password" class="form-control" name="cnew_password"></td></tr>
	<tr><td colspan="2"><button type="submit">Submit</button></td></tr>
</table>
</div>
<div class="col-lg-3"></div>
</div>
</div>
<?php echo form_close(); ?>