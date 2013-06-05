<h2>Редагувати Факультет</h2>
<?php  //var_dump($faculty); ?>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('faculty/edit/'.$faculty['`id`'],array('enctype' => 'multipart/form-data')); ?>
<?php //echo Form::hidden('id', $id); ?>
<?php echo Form::label('name', 'Назва'); ?>
<?php echo Form::input('name', $faculty['name']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('descr', 'Опис'); ?>
<?php echo Form::textarea('descr', $faculty['description']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('pic', 'Назва'); ?>
<?php echo Form::file('pic'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<input class="btn btn-small" type="submit" value="Зберегти зміни" name="update">
<?php echo Form::close(); ?>
