<h2>Update Teacher</h2>
<?php var_dump($teacher); ?>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>

<?php 

echo Form::open('teacher/edit/'.$id,array('enctype' => 'multipart/form-data')); ?>
<?php //echo Form::hidden('id', $id); ?>
<?php echo Form::label('name', "Ім'я"); ?>
<?php echo Form::input('name', $teacher['name']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('surname', 'Прізвище'); ?>
<?php echo Form::input('surname', $teacher['surname']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('patronim', 'По-батькові'); ?>
<?php echo Form::input('patronimic', $teacher['patronimic']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('posada', 'Посада'); ?>
<?php echo Form::input('posada'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('mobPhn', 'Номер телефону'); ?>
<?php echo Form::input('mobPhn'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('passport', 'Серія і номер паспорту'); ?>
<?php echo Form::input('passport'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('surname2', 'Друге прізвище'); ?>
<?php echo Form::input('surname2'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div><?php echo Form::label('mobPhn2', 'Номер мобільного телефону'); ?>
<?php echo Form::input('mobPhn2'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('img', 'Фотографія'); ?>
<?php echo Form::file('img'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('kafedra', 'Кафедри'); ?>
<?php var_dump($kafedra); ?>
<?php echo Form::select('kid', $kafedra, $teacher['kid']); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<?php echo Form::submit('update', 'Зберегти зміни'); ?>
<?php echo Form::close(); ?>
