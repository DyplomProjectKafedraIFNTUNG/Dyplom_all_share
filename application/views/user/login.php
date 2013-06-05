<h2>Вхід</h2>
<? if ($message) : ?>
	<h3 class="message">
		<?php echo  $message; ?>
	</h3>
<? endif; ?>

<?php echo Form::open('user/login'); ?>

<?php echo  Form::label('username', "Введіть ім'я користувача"); ?>
<?php echo  Form::input('username', HTML::chars(Arr::get($_POST, 'username'))); ?>

<?php echo  Form::label('password', 'Пароль'); ?>
<?php echo  Form::password('password'); ?>

<?php echo  Form::label('remember', "Запам'ятати мене"); ?>
<?php echo  Form::checkbox('remember'); ?>

<p>("Запам'ятати мене" тримає Вас залогіненим протягом двох тижнів)</p>

<input class="btn btn-small" type="submit" value="Увійти" name="login">
<?php echo  Form::close(); ?>

<p>Якщо Ви ще не зареєстровані, то Вам сюди <?php echo  HTML::anchor('user/create', 'Реєстрація'); ?></p>
