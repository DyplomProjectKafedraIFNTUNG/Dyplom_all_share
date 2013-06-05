<h2>Редагувати групу</h2>
<?php var_dump($group); ?>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('group/edit/'.$group['id'],array('enctype' => 'multipart/form-data')); ?>
<?php //echo Form::hidden('id', $id); ?>
<?php echo Form::label('name', 'Назва'); ?>
<?php echo Form::input('name', $group['GOSname']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<!--  forma navchanna -->
<?php echo Form::label('study_form', 'Форма навчання'); ?>
<?php //var_dump($faculties); ?>
<?php   echo Form::select('study_form_id', $study_form, $group['sfid']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<!-- kafedra -->
<?php echo Form::label('kafedra', 'Кафедра'); ?>
<?php //var_dump($faculties); ?>
<?php   echo Form::select('kafedra_id', $kafedra, $group['kid']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<input class="btn btn-small" type="submit" value="Додати групу" name="update">
<?php echo Form::close(); ?>
