<?php 
header("Content-Type: text/html; charset=utf-8");
//var_dump($fac);

echo "<h1>Викладачі</h1>";?>

<table class="table table-bordered">
<?php foreach($teachers as $val): ?>
	<tr>
		<td><img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height:120px;" src="<?php echo url::base();?>/public/img/teacher/<?php echo $val['img'];?>"></br><?php echo "$val[surname]"?> <?php echo "$val[name]" ?> <?php echo "$val[patronimic]" ?></td>
		<td><a class="btn btn-mini" href="/kohana/teacher/<?php echo "$val[id]" ?>">Детальніше</a></td>
		<?php if(in_array('admin',$roles)):?>	
			<td><a class="btn btn-mini" title="Редагувати" href="<?php echo url::base();?>teacher/edit/<?php echo $val['id']; ?>"><i class="icon-pencil"></i></a>&nbsp <a class="btn btn-mini" title="Видалити" href="<?php echo url::base();?>teacher/delete/<?php echo $val['id']; ?>"><i class="icon-remove"></i></a></td>
		<?php endif;?>
	</tr>
<?php endforeach; ?>

</table>
<?php if(in_array('admin',$roles)):?>
<a class="btn btn-mini" href="<?php echo url::base();?>teacher/create"><i class="icon-plus"></i>Додати викладача</a>
<?php endif;?>

<?php echo $pagination; ?>