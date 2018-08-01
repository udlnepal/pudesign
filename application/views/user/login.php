<p>
    <?php echo $this->session->flashdata('verify_msg'); ?>
</p>
 <style>form{border-bottom:0 !important;}</style>
<h4>User Login Form</h4>
 <div class="jumbotron">
<div class="row">
<div class="col-lg-3"></div>
<div class="col-lg-6 ">
<?php $attributes = array("name" => "loginform");
echo form_open("user/login", $attributes);?>
<table class="table table-bordered img-thumbnail">
    <tr>    
        <td><label for="email">Email</label></td><td><input class="form-control" name="email" placeholder="Email-ID" type="text" /> <span style="color:red"><?php echo form_error('email'); ?></span></td>
    </tr>    
    <tr>    
        <td><label for="subject">Password</label></td><td><input class="form-control" name="password" placeholder="Password" type="password" /> <span style="color:red"><?php echo form_error('password'); ?></span></td>
    </tr>        
    <tr>    
        <td></td>
        <td><button name="submit" type="submit" class="btn btn-success">Login</button>
            <a href="register" class="btn btn-info">Register</a>
        </td>        
    </tr>
</table>   
</div>
<div class="col-lg-3"></div>
</div>
</div> 
<?php echo form_close(); ?>
 
<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
