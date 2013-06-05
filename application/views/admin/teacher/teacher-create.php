<h2>Create teacher</h2>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>
 <!-- 

 -->
<?php 

echo Form::open('teacher/create/',array('enctype' => 'multipart/form-data', 'method'=>'post')); ?>
<?php echo Form::label('name', "Ім'я"); ?>
<?php echo Form::input('name'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('surname', 'Прізвище'); ?>
<?php echo Form::input('surname'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('patronim', 'По-батькові'); ?>
<?php echo Form::input('patronim'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

 <?php echo Form::label('posada', 'Посада'); ?>
<?php echo Form::input('posada'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
 
<?php echo Form::label('phone', 'Телефон'); ?>
<?php echo Form::input('phone'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<?php echo Form::label('passp', 'Паспорт'); ?>
<?php echo Form::input('passp'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('kid', 'Кафедра'); ?>
<?php //var_dump($kafedras); ?>
<?php echo Form::select('kid', $kafedras, 0,array('id'=>'kafedra')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
 
<input class="btn btn-small" type="submit" value="Додати викладача" name="create">
<?php echo Form::close(); ?>
