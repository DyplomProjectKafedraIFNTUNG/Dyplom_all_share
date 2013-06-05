<h2>Редагувати кафедку</h2>
<?php //var_dump($kafedra); ?>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('kafedra/edit/'.$id,array('enctype' => 'multipart/form-data')); ?>
<?php //echo Form::hidden('id', $id); ?>
<?php echo Form::label('name', 'Назва'); ?>
<?php echo Form::input('name', $kafedra['kname']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('descr', 'Опис'); ?>
<?php echo Form::textarea('descr', $kafedra['description']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<?php echo Form::label('Faculty', 'Факультети'); ?>
<?php var_dump($faculties); ?>
<?php echo Form::select('facultyId', $faculties, $kafedra['fid']); ?>
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
