<style type="text/css">
body {
	padding-top: 50px;
}
</style>

<div style="padding: 15px 15px">
	<div class="row"><?php echo $this->element('left_panel');?>
	
	<div class="col-md-10"><legend>List User</legend>
		<table class="table">
			<thead>
				<tr>
					<th><a><?php echo __('ID');?></a></th>
					<th><a><?php echo __('Username');?></a></th>
					<th><a><?php echo __('Disabled');?></a></th>
					<th><a><?php echo __('Actions');?></a></th>
				</tr>
			</thead>
			<tbody>
				
				<?php foreach ($users as $user): ?>
				<tr>
					<td><? echo __($user['User']['ID'])?></td>
					<td><? echo __($user['User']['Username'])?></td>
					<td><? echo __( ($user['User']['Disabled'] == 1) ? 'true' : 'false')?></td>
					<td>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/user_edit.png"></img>',array('action' => 'edit', $user['User']['ID']), array('escape' => false, 'title' => 'Edit user'));?>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/user_delete.png"></img>',array('action' => 'remove', $user['User']['ID']), array('escape' => false, 'title' => 'Remove user'), 'Are you sure you want to remove this user?');?>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/table.png"></img>',array('controller' => 'user_attributes', 'action' => 'index', $user['User']['ID']), array('escape' => false, 'title' => 'User attributes'));?>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/page_white_text.png"></img>',array('controller' => 'user_logs', 'action' => 'index', $user['User']['ID']), array('escape' => false, 'title' => 'User logs'));?>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/group.png"></img>',array('controller' => 'user_groups', 'action' => 'index', $user['User']['ID']), array('escape' => false, 'title' => 'User groups'));?>
						<?php echo $this->Html->link('<img src="/resources/custom/images/silk/icons/chart_bar.png"></img>',array('controller' => 'user_topups', 'action' => 'index', $user['User']['ID']), array('escape' => false, 'title' => 'User topups'));?>
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
	 	<span class="glyphicon glyphicon-time" /> - Processing,
		<span class="glyphicon glyphicon-edit" /> - Override, 
		<span class="glyphicon glyphicon-import" /> - Being Added,
		<span class="glyphicon glyphicon-trash" /> - Being Removed,
		<span class="glyphicon glyphicon-random" /> - Conflicts
		</div>
	</div>
</div>


