<style type="text/css">
body {
	padding-top: 50px;
}
</style>

<div style="padding: 15px 15px">
	<div class="row"><?php echo $this->element('left_panel');?>
	
	<div class="col-md-10"><legend><?php echo __('Attribute Information')?></legend>
		<?php echo $this->Form->create()?>
			<div class="form-group">
				<?php echo $this->Form->label('Name', 'Name', array('class'=>'col-md-2 control-label'));?>								
				<div class="row">
					<div class="col-md-4 input-group">
						<?php echo $this->Form->input('Name', array('label' => false, 'class' => 'form-control', 
										'placeholder' => 'Name', 'value' => $userAttribute['UserAttribute']['Name']));?>
					</div>					
				</div>
			</div>
			<div class="form-group">
				<?php echo $this->Form->label('Operator', 'Operator', array('class'=>'col-md-2 control-label'));?>
				<div class="row">
					<div class="col-md-4 input-group">
						<?php echo $this->Form->input('Operator', array('label' => false, 'class' => 'form-control',
							 'type' => 'select', 'options' => array('=', ':=', '==', '+=', '!=', '<', '>', '<=', '>=',
																	'=~', '!~', '=*', '!*', '||=='), 'value' => $userAttribute['UserAttribute']['Operator']));?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<?php echo $this->Form->label('Value', 'Value', array('class'=>'col-md-2 control-label'));?>
				<div class="row">
					<div class="col-md-4 input-group">
						<?php echo $this->Form->input('Value', array('label' => false, 'class' => 'form-control', 
								'placeholder' => 'Value', 'value' => $userAttribute['UserAttribute']['Value']));?>
					</div>
				</div>
			</div>
			<div class="form-group">
				<?php echo $this->Form->label('Disabled', 'Disabled', array('class'=>'col-md-2 control-label'));?>
				<div class="row">
					<div class="col-md-3">
						<?php if($userAttribute['UserAttribute']['Disabled'] = 1) {
								 $isCheck = true;
							} else {
								$isCheck = false;
							}
						?>
						<?php echo $this->Form->checkbox('Disabled', array('checked' => $isCheck));?>						
						<?php echo __('Disabled')?>					
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><?php echo __('Save', true)?></button>
				<?php echo $this->Html->link(__('Cancel', true), array('action' => 'index', $userAttribute['UserAttribute']['UserID']), array('class' => 'btn btn-default'))?>							
			</div>
		<?php echo $this->Form->end(); ?>
		
	 	<span class="glyphicon glyphicon-time" /> - Processing,
		<span class="glyphicon glyphicon-edit" /> - Override, 
		<span class="glyphicon glyphicon-import" /> - Being Added,
		<span class="glyphicon glyphicon-trash" /> - Being Removed,
		<span class="glyphicon glyphicon-random" /> - Conflicts
		</div>
	</div>
</div>


