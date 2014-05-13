<style type="text/css">
body {
	padding-top: 50px;
}
</style>

<div style="padding: 15px 15px">
	<div class="row"><?php echo $this->element('left_panel');?>
	
	<div class="col-md-10"><legend>Attribute</legend>
		<table class="table">
			<thead>
				<tr>
					<th><a><?php echo __('ID', true);?></a></th>
					<th><a><?php echo __('Name', true);?></a></th>
					<th><a><?php echo __('Operator', true);?></a></th>
					<th><a><?php echo __('Value', true);?></a></th>
					<th><a><?php echo __('Disabled', true);?></a></th>
					<th><a><?php echo __('Actions', true);?></a></th>
				</tr>
			</thead>
			<tbody>
				
				<?php foreach ($userAttributes as $userAttribute): ?>
				<tr>
					<td><? echo __($userAttribute['UserAttribute']['ID'])?></td>
					<td><? echo __($userAttribute['UserAttribute']['Name'])?></td>
					<td><? echo __($userAttribute['UserAttribute']['Operator'])?></td>
					<td><? echo __($userAttribute['UserAttribute']['Value'])?></td>
					<td><? echo __( ($userAttribute['UserAttribute']['Disabled'] == 1) ? 'true' : 'false')?></td>
					<td>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/table_edit.png"></img>',array('controller' => 'user_attributes',  'action' => 'edit', $userAttribute['UserAttribute']['ID'], $userId), array('escape' => false, 'title' => 'Edit attribute'));?>												
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/table_delete.png"></img>',array('controller' => 'user_attributes','action' => 'remove', $userAttribute['UserAttribute']['ID'], $userId), array('escape' => false, 'title' => 'Remove attribute'), 'Are you sure you want to remove this attribute?');?>
					</td>
				</tr>
				<? endforeach; ?>
				
				<tr>
					<td align="center" colspan="10">

						<ul class="pagination">
							<li><a href="limits.html#">&laquo;</a></li>
							<li class="active"><a href="limits.html#">1</a></li>
							<li><a href="limits.html#">2</a></li>
							<li><a href="limits.html#">3</a></li>
							<li><a href="limits.html#">4</a></li>
							<li><a href="limits.html#">5</a></li>
							<li><a href="limits.html#">&raquo;</a></li>
						</ul>

					</td>
				</tr>
			</tbody>
		</table>
		<div class="form-group">			
			<?php echo $this->Html->link(__('Add'), array('action' => 'add', $userId), array('class' => 'btn btn-primary'))?>			
			<?php echo $this->Html->link(__('Cancel'), array('controller' => 'users', 'action' => 'index', $userId), array('class' => 'btn btn-default'))?>
		</div>
	 	<span class="glyphicon glyphicon-time" /> - Processing,
		<span class="glyphicon glyphicon-edit" /> - Override, 
		<span class="glyphicon glyphicon-import" /> - Being Added,
		<span class="glyphicon glyphicon-trash" /> - Being Removed,
		<span class="glyphicon glyphicon-random" /> - Conflicts
		</div>
	</div>
</div>


