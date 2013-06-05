<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<link href="<?php echo URL::base() ?>public/css/style.css" rel="stylesheet" media="screen">
<link href="<?php echo URL::base() ?>public/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?php echo URL::base() ?>public/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" media="screen">  
    
<script src="<?php echo URL::base() ?>public/js/jquery-1.9.1.js"></script>
<script src="<?php echo URL::base() ?>public/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="<?php echo URL::base() ?>public/js/bootstrap.min.js"></script>
<script src="<?php echo URL::base() ?>public/js/trOnclick.js"></script>
 
</head>
 
<body>
	<div class="container">
		<!-- шапка сайту 
		<div id="header">
			<img src="<?php //echo URL::base() ?>public/img/navanlogo.png" alt="Cafedra IFNTUNG">
		</div>
		 Меню під шапкою -->
		<div id="centerMenu" class="navbar">
			<div class="navbar-inner">
				
				<ul class="nav">
					<li><a href="<?php echo url::base();?>"><i class="icon-home"></i></a></li>
					<li><a href="/kohana/about/">Про сайт</a></li>
					<?php if(!$logged): ?>
						<li><a href="/kohana/user/create">Реєстрація</a></li>
						<li><a href="/kohana/user/login">Вхід</a></li>
					<?php endif;?>	
					<?php if($logged): ?>
						<li><a href="/kohana/user/logout">Вихід</a></li>
					<?php endif;?>
					</ul>
			</div>  
		</div>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span2">
					<ul class="nav nav-pills nav-stacked">
					    <li><a href="/kohana/page/" >Головна</a></li>
						<li><a href="/kohana/faculty/" >Факультети</a></li>
						<li><a href="/kohana/kafedra/" >Кафедри</a></li>
						<li><a href="/kohana/groups/" >Групи студентів</a></li>
						<li><a href="/kohana/student/" >Студенти</a></li>
						<li><a href="/kohana/lessons/" >Предмети</a></li>
						<li><a href="/kohana/teachers/" >Викладачі</a></li>
						<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/kohana/navan/" >Навантаження</a>
							<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
								<li><a tabindex="-1" href="/kohana/load/" >Навантаження на кожного викладача на рік</a></li>
								<li><a tabindex="-1" href="/kohana/load/" >Штатний розпис кафедри на рік</a></li>
								<li><a tabindex="-1" href="/kohana/load/" >Навантаження - порівняння</a></li>
                                                                
                                <li><a tabindex="-1" href="/kohana/load/get-personal-teacher-load" >Персональне навантаження викладача</a></li>
								<li><a tabindex="-1" href="/kohana/load/get-main-teacher-load" >Основне навантження викладача</a></li>
								<li><a tabindex="-1" href="/kohana/load/time" >Навантаження для складання розкладу по семестрах</a></li>
                                                                
							</ul>
					</ul>		
				</div>
				<div class="span10">
					<?php echo $content; ?>
				</div>
			</div>
		</div>
		<div id="footer">
				<p>2013 Всі права захищено</p>
		</div>
	</div>
</body>
</html>