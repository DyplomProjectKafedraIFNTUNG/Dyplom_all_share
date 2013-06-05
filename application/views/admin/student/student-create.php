<h2>Додати студента</h2>
<?php// if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php //endif; ?>
 <!-- 
 VALUES
  (add_id,4, val_zalik1),
  (add_id,6, val_passp ),
  (add_id,7, val_surname2),
  (add_id,8, val_zalik2),
  (add_id,9, val_photo);
 -->
<?php 

echo Form::open('student/create/'.$groupId,array('enctype' => 'multipart/form-data')); ?>
<?php echo Form::label('name', 'Імя'); ?>
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

<?php echo Form::label('phone', 'Телефон'); ?>
<?php echo Form::input('phone'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>


<?php echo Form::label('zalik1', 'Номер заліковки'); ?>
<?php echo Form::input('zalik1'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('passport', 'Паспортні дані'); ?>
<?php echo Form::input('passport'); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>

<input class="btn btn-small" type="submit" value="Додати студента" name="create">
<?php echo Form::close(); ?>
