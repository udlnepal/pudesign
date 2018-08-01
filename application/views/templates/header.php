<html>
        <head>
                <title>Purbanchal University Admin Panel</title>
                <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
                <link rel="stylesheet" href="<?php base_url();?>assets/css/all.css">
        </head>
        <body class="container">
            <div class="row">
<div class="col-lg-12 text-right">
    
     <?php if ($this->session->userdata('is_logged_in')) { 
                    echo '<b>Logged in as:</b> <a href="user/edituser">'. $this->session->userdata('email').'</a>';
                    echo ' | ' . "<a href=" . site_url('user/logout') . ">Logout</a>";
                }else 

            ?>  
</div>
</div>
<div class="clearfix"></div>
            </div>
 <div class="row" style="margin-top:10px;">
                <div class="col-lg-6"><h3><a href="<?php echo site_url('admin');?>">Admin Panel</a></h3></div>
                <div class="col-lg-3"><a target="_blank" class="btn btn-info" href="<?php echo base_url();?>">View Website</a></div>
</div>     
               


                <?php  {

 }?>