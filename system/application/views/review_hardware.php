<div class="art-content">
	<div class="art-Post">
	    <div class="art-Post-body">
		<div class="art-Post-inner">
		    <h2 class="art-PostHeaderIcon-wrapper"><span class="art-PostHeader"><?=$name?></span></h2>
		    	<div class="art-PostContent">

<p>Please review the hardware device:</p>

<b><font color="red"><?php echo validation_errors(); ?></font></b>

<?php
echo form_open('hardware/save_review');
?>
<input type="hidden" name="id" value="<?=$id?>"/>
<table class="art-article" border="0" cellspacing="0" cellpadding="0">
  <tbody>
	<tr><th>Name of the device:</th><td><input type="text" name="name" value="<?php echo set_value('name', $name); ?>" size="70"/></td></tr>
	<tr><th>Type of hardware:</th><td>
		<select name="category">				
			<?php foreach($categories->result() as $cat) {	?>
				<option value="<?=$cat->id?>" <?php echo set_select('category', $cat->id, ($category == $cat->id)); ?>><?=$cat->name?></option>							
			<?php } ?>
		</select></td></tr>

	<tr><th>Brand:</th><td>
		<select name="brand">				
			<?php foreach($brands->result() as $brnd) { ?>	
				<option value="<?=$brnd->id?>" <?php echo set_select('brand', $brnd->id, ($brand == $brnd->id)); ?>><?=$brnd->name?></option>	
			<?php } ?>							
		</select></td></tr>
	
	<tr><td colspan="2" align="center">
		 <span class="art-button-wrapper">
                	<span class="l"> </span>
                	<span class="r"> </span>
                	<input class="art-button" type="submit" name="submit" value="Review this hardware device"/>
                </span>
	</td></tr>
</form> 
</tbody>
</table>
			</div>
			<div class="cleared"></div>
</div>
</div>
</div>
</div>

