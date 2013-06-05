<h2>Створення нового користувача</h2>
<?php if ($message) : ?>
	<h3 class="message">
		<?php $message; ?>
	</h3>
<?php endif; ?>

<?php echo Form::open('user/create'); ?>

<?php echo Form::label('username', "Ім'я"); ?>
<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>
<div class="error">
	<?php echo Arr::get($errors, 'username'); ?>
</div>

<?php echo Form::label('email', 'Email адреса'); ?>
<?php echo Form::input('email', HTML::chars(Arr::get($_POST, 'email'))); ?>
<div class="error">
	<?php echo Arr::get($errors, 'email'); ?>
</div>

<?php echo Form::label('password', 'Пароль'); ?>
<?php echo Form::password('password'); ?>
<div class="error">
	<?php echo Arr::path($errors, '_external.password'); ?>
</div>

<?php echo Form::label('password_confirm', 'Підтвердіть пароль'); ?>
<?php echo Form::password('password_confirm'); ?>
<div class="error">
	<?php echo Arr::path($errors, '_external.password_confirm'); ?>
</div>

<input class="btn btn-small" type="submit" value="Зареєструвати" name="create">
<?php echo Form::close(); ?>

<p>Або натисніть <?php echo HTML::anchor('user/login', 'Увійти'); ?> якщо ви вже зареєстровані.</p>
