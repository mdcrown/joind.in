<div id="claim_select_div" style="text-align:center;display:none">
	Who are you?<br/>
	<?php
	$speaker_list = array();
	foreach($speakers as $speaker){
		$speaker_list[$speaker->ID]=$speaker->speaker_name;
	}
	echo form_dropdown('claim_name_select', $speaker_list,null,'id="claim_name_select"');
	?>
	<input type="button" value="claim" id="claim-btn"/>
	<input type="button" value="cancel" id="claim-cancel-btn"/>
</div>
<p class="admin">
<?php if($admin):?>
	<a class="btn-small" href="/talk/delete/<?php echo $detail->tid; ?>">Delete talk</a>	
	<a class="btn-small" href="/talk/edit/<?php echo $detail->tid; ?>">Edit talk</a>
<?php endif; ?>
<?php
if(empty($claim_details) || count($claim_details)<count($speaker)): ?>
	<a class="btn-small" href="#" id="claim_btn">Claim This Talk</a>	
<?php endif; ?>
</p>