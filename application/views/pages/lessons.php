<?php 
header("Content-Type: text/html; charset=utf-8");
$db = new Lessons();
$les = $db->getLessons();
//var_dump($les);
echo "<h3>Предмети</h3>";?>
<table class="table table-bordered">
<?php foreach($les as $val): ?>
    <tr>
		<td><?php echo "$val[name]" ?></td>
		<?php //if(in_array('admin',$roles)):?>	
				<td><a class="btn btn-mini" title="Редагувати" href="<?php echo url::base();?>lessons/edit/<?php echo $val['id']; ?>"><i class="icon-pencil"></i></a>&nbsp
				<a class="btn btn-mini" title="Видалити" href="<?php echo url::base();?>lessons/delete/<?php echo $val['id']; ?>"><i class="icon-remove"></i></a></td>
		<?php //endif;?>
	</tr>
<?php endforeach; ?>
</table>
<?php if(in_array('admin',$roles)):?>
	<a class="btn btn-mini" href="<?php echo url::base();?>lessons/create"><i class="icon-plus"></i>Додати новий предмет</a>
<?php endif;?>