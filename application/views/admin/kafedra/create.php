<h2>Додати кафедру</h2>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('kafedra/create/',array('enctype' => 'multipart/form-data')); ?>
<?php echo Form::label('name', 'Назва'); ?>
<?php echo Form::input('name', HTML::chars(Arr::get($_POST, 'name'))); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('descr', 'Опис'); ?>
<?php echo Form::textarea('descr', HTML::chars(Arr::get($_POST, 'descr'))); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('pic', 'Назва'); ?>
<?php echo Form::file('pic'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
<?php echo Form::label('Faculty', 'Факультет'); ?>
<?php //var_dump($faculties); ?>
<?php echo Form::select('facultyId', $faculties, 0); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<input class="btn btn-small" type="submit" value="Додати кафедру" name="create">
<?php echo Form::close(); ?>
