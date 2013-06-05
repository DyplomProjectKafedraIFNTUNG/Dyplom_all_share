<?php 
header("Content-Type: text/html; charset=utf-8");
//var_dump($gr);
echo "<h3>Групи студентів</h3>";?>
<table class="table table-bordered">
<?php foreach($gr as $val): ?>
    
		<tr id="groups">
			<td><p><?php echo "$val[GOSname]" ?></p></td>
			<td><a class="btn btn-mini" href="<?php echo url::base();?>groups/view/<?php echo $val['id'];?>">Переглянути</a></td>
			<?php if(in_array('admin',$roles)):?>	
				<td><a class="btn btn-mini" href="<?php echo url::base();?>groups/edit/<?php echo $val['id']; ?>"><i class="icon-pencil"></i>Редагувати</a></td>
				<td><a class="btn btn-mini" href="<?php echo url::base();?>groups/delete/<?php echo $val['id']; ?>"><i class="icon-remove"></i>Видалити</a></td>
			<?php endif;?>
		</tr>	
	
<?php //var_dump($val); 
endforeach; ?>
</table>
<?php if(in_array('admin',$roles)):?>
	<a class="btn btn-mini" href="<?php echo url::base();?>groups/create"><i class="icon-plus"></i>Додати нову групу</a>
<?php endif;?>
