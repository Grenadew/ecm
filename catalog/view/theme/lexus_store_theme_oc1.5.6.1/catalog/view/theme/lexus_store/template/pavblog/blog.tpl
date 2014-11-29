<?php require( DIR_TEMPLATE.$this->config->get('config_template')."/template/common/config.tpl" ); ?>
<?php echo $header; ?>

	<?php if( $SPAN[0] ): ?>
		<div class="col-lg-<?php echo $SPAN[0];?> col-md-<?php echo $SPAN[0];?> col-sm-12 col-xs-12">
			<?php echo $column_left; ?>
	</div>
	
<?php endif; ?> 
<div class="col-lg-<?php echo $SPAN[1];?> col-md-<?php echo $SPAN[1];?> col-sm-12 col-xs-12">	
	 <?php require( DIR_TEMPLATE.$this->config->get('config_template')."/template/common/breadcrumb.tpl" );  ?>  
<div id="content" class="content-blog"><?php echo $content_top; ?>
  <h2><?php echo $heading_title; ?></h2>
  
  <div class="pav-blog">
  		
		<div class="blog-meta">
			
			<?php if( $config->get('blog_show_author') ) { ?>
			<span class="author"><span><?php echo $this->language->get("text_write_by");?></span> <?php echo $blog['author'];?></span>
			<?php } ?>
			<?php if( $config->get('blog_show_category') ) { ?>
			<span class="publishin">
				<span><?php echo $this->language->get("text_published_in");?></span>
				<a href="<?php echo $blog['category_link'];?>" title="<?php echo $blog['category_title'];?>"><?php echo $blog['category_title'];?></a>
			</span>
			<?php } ?>
			<?php if( $config->get('blog_show_created') ) { ?>
			<span class="created"><span><?php echo $this->language->get("text_created_date");?> <?php echo $blog['created'];?></span></span>
			<?php } ?>
			<?php if( $config->get('blog_show_hits') ) { ?>
			<span class="hits"><span><?php echo $this->language->get("text_hits");?></span> <?php echo $blog['hits'];?></span>
			<?php } ?>
			<?php if( $config->get('blog_show_comment_counter') ) { ?>
			<span class="comment_count"><span><?php echo $this->language->get("text_comment_count");?></span> <?php echo $blog['comment_count'];?></span>
			<?php } ?>
		</div>
		<?php if( $blog['thumb_large'] ) { ?>
			<div class="image">
				<img src="<?php echo $blog['thumb_large'];?>" title="<?php echo $blog['title'];?>"/>
			</div>
			<?php } ?>
		
		
		 <div class="description clearfix"><?php echo $description;?></div>
		 <div class="blog-content clearfix">
				<div class="content-wrap clearfix">
				<?php echo $content;?>
				</div>
			<?php if( $blog['video_code'] ) { ?>
			<div class="pav-video clearfix"><?php echo html_entity_decode($blog['video_code'], ENT_QUOTES, 'UTF-8');?></div>
			<?php } ?>
		
		
		
		 </div>
		 
		
		 <?php if( !empty($tags) ) { ?>
		 <div class="blog-tags">
			<b><?php echo $this->language->get('text_tags');?></b>
			<?php foreach( $tags as $tag => $tagLink ) { ?>
				<a href="<?php echo $tagLink; ?>" title="<?php echo $tag; ?>"><?php echo $tag; ?></a>
			<?php } ?>
		 </div>
		 <?php } ?>
		 <div class="blog-social clearfix">
				
				<div class="social-wrap">
					<div class="social-heading"><b><?php echo $this->language->get('text_like_this');?> </b> </div>
					
					<!-- Twitter Button -->
					<div class="itemTwitterButton">
						<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal"><?php echo $this->language->get('text_twitter_share'); ?></a><script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
					</div>
		
					<!-- Facebook Button -->
					<div class="itemFacebookButton">
						<div id="fb-root"></div>
						<script type="text/javascript">
							(function(d, s, id) {
							  var js, fjs = d.getElementsByTagName(s)[0];
							  if (d.getElementById(id)) {return;}
							  js = d.createElement(s); js.id = id;
							  js.src = "//connect.facebook.net/en_US/all.js#appId=177111755694317&xfbml=1";
							  fjs.parentNode.insertBefore(js, fjs);
							}(document, 'script', 'facebook-jssdk'));
						</script>
						<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
					</div>
					<!-- Google +1 Button -->
					<div class="itemGooglePlusOneButton">	
						<g:plusone annotation="inline" width="120"></g:plusone>
						<script type="text/javascript">
						  (function() {
							window.___gcfg = {lang: 'en'}; // Define button default language here
							var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							po.src = 'https://apis.google.com/js/plusone.js';
							var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
					</div>
				</div>	
		 </div>
		 <div class="blog-bottom clearfix">
		 <div class="row">
				<?php if( !empty($samecategory) ) { ?>
				<div class="col-lg-6">
					<h3><?php echo $this->language->get('text_in_same_category');?></h3>
					<ul class="list">
						<?php foreach( $samecategory as $item ) { ?>
						<li><a href="<?php echo $this->url->link('pavblog/blog',"id=".$item['blog_id']);?>"><?php echo $item['title'];?></a></li>
						<?php } ?>
					</ul>
				</div>
				<?php } ?>
				<?php if( !empty($related) ) { ?>
				<div class="col-lg-6">
					<h3><?php echo $this->language->get('text_in_related_by_tag');?></h3>
					<ul class="list">
						<?php foreach( $related as $item ) { ?>
						<li><a href="<?php echo $this->url->link('pavblog/blog',"id=".$item['blog_id']);?>"><?php echo $item['title'];?></a></li>
						<?php } ?>
					</ul>
				</div>
				<?php } ?>
				</div>
		</div>
		
		 <div class="pav-comment">
			<?php if( $config->get('blog_show_comment_form') ) { ?>
				<?php if( $config->get('comment_engine') == 'diquis' ) { ?>
			    <div id="disqus_thread"></div>
					<script type="text/javascript">
						/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
						var disqus_shortname = '<?php echo $config->get('diquis_account');?>'; // required: replace example with your forum shortname

						/* * * DON'T EDIT BELOW THIS LINE * * */
						(function() {
							var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
							dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
							(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
						})();
					</script>
					<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
				<?php } elseif( $config->get('comment_engine') == 'facebook' ) { ?>
				<div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) {return;}
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo $config->get("facebook_appid");?>";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
					<div class="fb-comments" data-href="<?php echo $link; ?>" 
							data-num-posts="<?php echo $config->get("comment_limit");?>" data-width="<?php echo $config->get("facebook_width")?>">
					</div>
				<?php }else { ?>
					<?php if( count($comments) ) { ?>
					<h3><?php echo $this->language->get('text_list_comments'); ?></h3>
					<div class="pave-listcomments">
						<?php foreach( $comments as $comment ) {  $default='';?>
						<div class="comment-item clearfix" id="comment<?php echo $comment['comment_id'];?>">
							
							<img src="<?php echo "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $comment['email'] ) ) ) . "?d=" . urlencode( $default ) . "&s=60" ?>" align="left"/>
							<div class="comment-wrap">
								<div class="comment-meta">
								<span class="comment-created"><?php echo $this->language->get('text_created');?> <span><?php echo $comment['created'];?></span></span>
								<span class="comment-postedby"><?php echo $this->language->get('text_postedby');?> <span><?php echo $comment['user'];?></span></span>
								<span class="comment-link"><a href="<?php echo $link;?>#comment<?php echo $comment['comment_id'];?>"><?php echo $this->language->get('text_comment_link');?></a></span>
								</div>
								<?php echo $comment['comment'];?>
							</div>
						</div>
						<?php } ?>
						<div class="pagination">
							<?php echo $pagination;?>
						</div>
					</div>
					<?php } ?>
					<h4><?php echo $this->language->get("text_leave_a_comment");?></h4>
					<form action="<?php echo $comment_action;?>" method="post" id="comment-form">
						<div class="message" style="display:none"></div>
						<div class="form-group">
							<label for="comment-user"><?php echo $this->language->get('entry_name');?></label>
							<input class="form-control" type="text" name="comment[user]" value="" id="comment-user"/>
						</div>
						<div class="form-group">
							<label for="comment-email"><?php echo $this->language->get('entry_email');?></label>
							<input class="form-control" type="text" name="comment[email]" value="" id="comment-email"/>
						</div>
						<div class="form-groupa">
							<label for="comment-comment"><?php echo $this->language->get('entry_comment');?></label>
							<textarea class="form-control" name="comment[comment]"  id="comment-comment"></textarea>
						</div>
					<?php if( $config->get('enable_recaptcha') ) { ?>
						<div class="recaptcha">
							 <p><b><?php echo $entry_captcha; ?></b> </p>
							
						  
						    <img src="index.php?route=pavblog/blog/captcha" alt="" aligh="left"/>
						    <input class="form-control" type="text" name="captcha" value="<?php echo $captcha; ?>" size="10" />
						</div>
						<?php } ?>
						<input type="hidden" name="comment[blog_id]" value="<?php echo $blog['blog_id']; ?>" />
						<br/>
						<div class="buttons-wrap">
							<button class="btn btn-submit btn-theme-primary" type="submit">
								<span><?php echo $this->language->get('text_submit');?></span>
							</button>
						</div>
					</form>
					<script type="text/javascript">
						$( "#comment-form .message" ).hide();
						$("#comment-form").submit( function(){
							$.ajax( {type: "POST",url:$("#comment-form").attr("action"),data:$("#comment-form").serialize(), dataType: "json",}).done( function( data ){
								if( data.hasError ){
									$( "#comment-form .message" ).html( data.message ).show();	
								}else {
									location.href='<?php echo str_replace("&amp;","&",$link);?>';
								}
							} );
							return false;
						} );
						
					</script>
				<?php } ?>
			<?php } ?>
		 </div>
  </div>

  
  <?php echo $content_bottom; ?></div>

</div> 
<?php if( $SPAN[2] ): ?>
<div class="col-lg-<?php echo $SPAN[2];?> col-md-<?php echo $SPAN[2];?> col-sm-12 col-xs-12">	
	<?php echo $column_right; ?>
</div>
<?php endif; ?>
<?php echo $footer; ?>
