<div class="<?php echo $prefix; ?> box newsletter_block" id="newsletter_<?php echo $position.$module;?>">
	<p class="title_block"><?php echo $this->language->get("entry_newsletter");?></p>
	<div class="description col-lg-6 col-md-5 col-sm-12 col-xs-12 pavblock"><?php echo html_entity_decode($description);?></div>
	<div class="block_content col-lg-6 col-md-7 col-sm-12 col-xs-12 pavblock">
			<form id="formNewLestter"method="post" action="<?php echo $action; ?>">
			<p>
				<input type="text" class="inputNew" <?php if(!isset($customer_email)): ?> onblur="javascript:if(this.value=='')this.value='<?php echo $this->language->get("default_input_text");?>';" onfocus="javascript:if(this.value=='<?php echo $this->language->get("default_input_text");?>')this.value='';"<?php endif; ?> value="<?php echo isset($customer_email)?$customer_email:$this->language->get("default_input_text");?>" size="18" name="email">
					<!--<select name="action">
						<option value="1">Subscribe</option>
						<option value="0">Unsubscribe</option>
					</select>-->
					<input type="submit" name="submitNewsletter" class="button_mini" value="<?php echo $this->language->get("button_ok");?>">
				<input type="hidden" value="1" name="action">
			</p>
		</form>
	</div>
</div>
<script type="text/javascript">

$('#formNewLestter').on('submit', function() {
	var email = $('.inputNew').val();
	if(!isValidEmailAddress(email)) {
		$('.inputNew').before("<div class='error'>Email is not valid!</div>");
		$('.inputNew').focus();
		return false;
	}
});

function isValidEmailAddress(emailAddress) {
	var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	return pattern.test(emailAddress);
}
</script>