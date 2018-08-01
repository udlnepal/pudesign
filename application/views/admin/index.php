<div class="col-lg-12" style="padding:0; margin-bottom: 10px;">

<nav class="navbar navbar-expand-lg navbar-light " style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="<?php echo base_url();?>admin">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
      <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('admin/create'); ?>">Add Middle Block Contents</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo site_url('news_events/create_newsevents'); ?>">News & Events and Quick Links</a></li>
      </ul>
      
    </div>
  </nav>
                </div>

<h5>View and Edit Items from Below Accordians. Use upper menu to Add New Items</h5>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         Middle Block Elements
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
       <table border='1' cellpadding='4' class="table table-bordered table-striped ">
    <tr>
        <td width="10%"><strong>Icon Class</strong></td>
        <td width="30%"><strong>Title</strong></td>
        <td width="35%;"><strong>Content</strong></td>
        <td width="25%"><strong>Action</strong></td>
    </tr>

               
                  
  <?php foreach ($middle_block as $ne_items): ?>
    
        <tr>
            <td width="15%"><i class="<?php echo $ne_items['icon_class_value'] ?>"></i>&nbsp;<?php echo $ne_items['icon_class_value'] ?></td>
            <td><?php echo $ne_items['title_mblock']; ?></td>
            <td><?php echo $ne_items['content_mblock']; ?></td>
            <td width="15%" class="text-center">
             <!--   <a href="<?php echo site_url('index.php/admin/'.$ne_items['id']); ?>">View</a> | -->
                <a class="btn btn-warning" href="<?php echo base_url('admin/edit/'.$ne_items['id']); ?>">Edit</a> | 
                <a class="btn btn-danger" href="<?php echo site_url('admin/delete/'.$ne_items['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
      
<?php endforeach;?>
</table>

      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
         News & Events And Quick Links
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <table border='1' cellpadding='4' class="table table-bordered table-striped ">
    <tr>
        <td width="15%"><strong>Type</strong></td>
        <td width="25%"><strong>Title</strong></td>
        <td width="15%;"><strong>Date</strong></td>
        <td width="25%"><strong>URL</strong></td>
        <td width="20%">Action</td>
    </tr>
  <?php foreach ($news_events as $new_items): ?>
    
        <tr>
            <td width="15%"><?php echo $new_items['ne_ql_type'] ?></td>
            <td><?php echo $new_items['title']; ?></td>
            <td><?php echo $new_items['date']; ?></td>
            <td><?php echo $new_items['link_address']; ?></td>
            <td width="15%" class="text-center">
              <a class="btn btn-warning" href="<?php echo base_url('news_events/edit_neq/'.$new_items['ne_ql_id']); ?>">Edit</a> | 
                <a class="btn btn-danger" href="<?php echo site_url('news_events/delete_neq/'.$new_items['ne_ql_id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
      
<?php endforeach;?>
</table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>