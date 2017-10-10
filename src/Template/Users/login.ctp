	<div class="users form">

	<?= $this->Form->create() ?>

	<fieldset>
		<legend>
			<?= __('Login')?>
		</legend>
			<?= $this->Form->input('username')?>
			<?= $this->Form->input('password')?>
	</fieldset>
	<?= $this->Form->button(__('Login')); ?>
	<?= $this->Form->end()?>
	
</div>