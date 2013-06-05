<h2>Профіль "<?php echo $user->username; ?>"</h2>

<ul>
	<li>Email: <?php echo $user->email; ?></li>
	<li>Був востаннє: <?php echo Date::fuzzy_span($user->last_login); ?></li>
</ul>

<?php echo HTML::anchor('user/logout', 'Вийти з профілю'); ?>