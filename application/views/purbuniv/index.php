   <ul class="cb-slideshow">
            <li><span>Image 01</span></li>
            <li><span>Image 02</span></li>
            <li><span>Image 03</span></li>
            <li><span>Image 04</span></li>
            
        </ul>

<section class="bg_1">

</section>
<div class="clearfix"></div>
<section class="block_2">
<div class="container">
<div class="row">
 <?php foreach ($middle_block as $mblock_item): ?>
<div class="col-lg-3">
	<div class="col-lg-12 pad_5 abs_block">
	<h5 class="text-center"><i class="<?php echo $mblock_item['icon_class_value'] ?> rounded-circle ico_pad_20_25"></i></h5>
<div class="abs_text_block">
<h6 class="text-center text-prime"><?php echo $mblock_item['title_mblock'] ?></h6>
<p class="text-justify"><?php echo $mblock_item['content_mblock'] ?></p>
</div>
</div>
</div>
<?php endforeach; ?>

</div>
</div>
</section>
<div class="clearfix"></div>
<section class="news_events">
	<div class="container">
		<div class="col-lg-12 float-left jumbotron">
			<div class="col-lg-6 float-left">
				<h5>News & Events</h5>
				<div class="img-thumbnail">
												<ul class="list-group">

											<?php foreach ($news_events as $n_events):?>

												<?php if( $n_events['ne_ql_type']=='news'){ ?>
 <li  class="list-group-item list-group-item-danger"><a href="<?php echo $n_events['link_address'] ?>"><?php echo $n_events['title'] ?></a>
<h6><?php echo $n_events['date'] ?></h6>
 </li>
<?php } ?>
            
<?php endforeach; ?>
</ul>
				</div>
			</div>
			<div class="col-lg-6 float-left">
				<h5>Quick Links</h5>
				<div class="img-thumbnail">


										<ul class="list-group">

											<?php foreach ($news_events as $n_events):?>

												<?php if( $n_events['ne_ql_type']=='qlinks'){ ?>
 <li  class="list-group-item list-group-item-danger"><a href="<?php echo $n_events['link_address'] ?>"><?php echo $n_events['title'] ?></a>
 </li>
<?php } ?>
            
<?php endforeach; ?>
</ul>


				</div>
			</div>	
		</div>
		<div class="clearfix"></div>
	</div>	
</section>
<div class="clearfix"></div>