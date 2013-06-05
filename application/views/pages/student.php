<?php 
header("Content-Type: text/html; charset=utf-8");

echo "<h3>Студенти</h3>";?>

<?php foreach($st as $val){ ?>
    <div class="thumbnail">
	<img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height:120px;" src="../public/img/zobr.png">
	<div class="caption">
		<h6><?php echo "$val[surn]"?> <?php echo "$val[name]" ?></h6>
		<p><a class="btn btn-large btn-block" href="/kohana/student/sinfo/<?php echo "$val[id]" ?>">Переглянути</a></p>
	</div>
</div>
<?php } ?>
<?php echo $pagination; ?>
    