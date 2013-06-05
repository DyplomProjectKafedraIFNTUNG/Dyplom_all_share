<?php 
header("Content-Type: text/html; charset=utf-8");
//var_dump($students);
//var_dump($group);
?>
<h3>Студенти групи <?php if(isset($students[0])) echo $students[0]['grp']?></h3>
 
<table class="table table-bordered">
 <?php foreach($students as $student): ?>
    <tr id="groups">
		<td><?php echo "$student[name] $student[surn]" ?>
		<?php if(in_array('admin',$roles)):?>
		<td><a class="btn btn-mini" href="<?php echo url::base();?>/groups/student/edit/<?php echo $student['id'];?>"><i class="icon-pencil"></i>Редагувати</a></td>
			<td><a class="btn btn-mini" href="<?php echo url::base();?>/groups/student/delete/<?php echo $student['id'];?>"><i class="icon-remove"></i>Видалити</a></td>
			<td><a class="btn btn-mini" href="<?php echo url::base();?>/student/sinfo/<?php echo $student['id'];?>">Переглянути</a></td>
		<?php endif;?>
		</tr>
<?php endforeach; ?>
</table>
<?php if(in_array('admin',$roles)):?>
	<a class="btn btn-mini" href="<?php echo url::base();?>student/create/<?php echo $students[0]['gid']?>"><i class="icon-plus"></i>Добавити студента</a>
<?php endif;?>