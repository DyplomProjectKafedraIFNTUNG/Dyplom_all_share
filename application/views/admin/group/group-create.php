<?php echo $additional_js ?> 
<h2>Додати групу</h2>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('groups/create/',array('enctype' => 'multipart/form-data')); ?>
<?php echo Form::label('name', 'Назва'); ?>
<?php echo Form::input('name'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('descr', 'Опис'); ?>
<?php echo Form::textarea('descr', HTML::chars(Arr::get($_POST, 'descr'))); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('faculty_id', 'Факультет'); ?>
<?php //var_dump($faculties); ?>
<?php echo Form::select('fid', $faculties, 0,array('id'=>'faculty')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('kafedra_id', 'Кафедра'); ?>
<?php //var_dump($faculties); ?>
<?php echo Form::select('kid', $kafedras,0, array('id'=>'kafedra')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>



<input class="btn btn-small" type="submit" value="Додати групу" name="create">
<?php echo Form::close(); ?>
