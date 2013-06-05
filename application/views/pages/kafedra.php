<?php 
header("Content-Type: text/html; charset=utf-8");
//var_dump($kaf);
echo "<h3>Кафедри</h3>";?>
<table class="table table-bordered">
<?php foreach($kaf as $val): ?>
	<tr>
		<td><?php echo "$val[kname]" ?></td>
		<td><a class="btn btn-mini" href="/kohana/kafedra/kinfo/<?php echo "$val[id]" ?>">Детальніше</a></td>
		<?php if(in_array('admin',$roles)):?>	
			<td><a class="btn btn-mini" title="Редагувати" href="<?php echo url::base();?>kafedra/edit/<?php echo $val['id']?>"><i class="icon-pencil"></i></a>&nbsp <a class="btn btn-mini" title="Видалити" href="<?php echo url::base();?>kafedra/delete/<?php echo $val['id']?>"><i class="icon-remove"></i></a></td>
		<?php endif;?>
	</tr>
<?php endforeach; ?>

</table>
<?php if(in_array('admin',$roles)):?>
<a class="btn btn-mini" href="<?php echo url::base();?>kafedra/create"><i class="icon-plus"></i>Додати нову кафедру</a>
<?php endif;?>

