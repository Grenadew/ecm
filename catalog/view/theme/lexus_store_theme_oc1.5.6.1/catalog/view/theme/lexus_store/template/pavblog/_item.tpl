<div class="blog-item">
	<div class="blog-header clearfix">
			<?php if( $config->get('cat_show_title') ) { ?>
		<div class="blog-header clearfix">
		
		<h3 class="blog-title">	<a href="<?php echo $blog['link'];?>" title="<?php echo $blog['title'];?>"><?php echo $blog['title'];?></a></h3>
		</div>
		<?php } ?>
		<div class="blog-meta">
			
			<?php if( $config->get('cat_show_created') ) { ?>
			<span class="created">
				<i class="icon-time"> <?php echo $this->language->get("text_created");?> :</i>
				<?php echo date("d-M-Y",strtotime($blog['created']));?>
			</span>
			<?php } ?>
			<?php if( $config->get('cat_show_author') ) { ?>
			<span class="author"><i class="icon-pencil">   <?php echo $this->language->get("text_write_by");?></i> <?php echo $blog['author'];?></span>
			<?php } ?>
			<?php if( $config->get('cat_show_category') ) { ?>
			<span class="publishin">
				<i class="icon-user"><?php echo $this->language->get("text_published_in");?></i>
				<a href="<?php echo $blog['category_link'];?>" title="<?php echo $blog['category_title'];?>"><?php echo $blog['category_title'];?></a>
			</span>
			<?php } ?>
			
			<?php if( $config->get('cat_show_hits') ) { ?>
			<span class="hits"><i class="icon-eye-open">   <?php echo $this->language->get("text_hits");?></i> <?php echo $blog['hits'];?></span>
			<?php } ?>
			<?php if( $config->get('cat_show_comment_counter') ) { ?>
			<span class="comment_count"><i class="icon-comments">   <?php echo $this->language->get("text_comment_count");?></i> <?php echo $blog['comment_count'];?></span>
			<?php } ?>
		</div>	
	</div>
	<div class="blog-body">
		<?php if( $blog['thumb'] && $config->get('cat_show_image') )  { ?>
			<img src="<?php echo $blog['thumb'];?>" title="<?php echo $blog['title'];?>" align="left"/>
		<?php } ?>
		<?php if( $config->get('cat_show_description') ) {?>
			<div class="description">
				<?php echo $blog['description'];?>
			</div>
			<?php } ?>
		
			<?php if( $config->get('cat_show_readmore') ) { ?>
			<div class="blog-readmore"><a href="<?php echo $blog['link'];?>" class="button"><?php echo $this->language->get('text_readmore');?></a></div>
			<?php } ?>
	</div>	
</div>