<h4>Профіль</h4>
<table class="table table-bordered">
	<tr>
		<?php //echo var_dump($faculty);?>
		<td><img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height:120px;" src="<?php echo url::base();?>public/img/faculty/<?php echo $faculty['pic'];?>"></td>  
	</tr>
	<tr>
		<?php //echo var_dump($faculty);?>
		<td><?php echo $faculty['name']; ?></td> 
	</tr>
	<tr>
		<?php //echo var_dump($faculty);?>
		<td>Інформація про факультет: </br><?php echo $faculty['description']; ?></td>  
	</tr>
</table>

<?php if(in_array('admin',$roles)): ?>		
	<p><span><a class="btn btn-mini" href="<?php echo url::base();?>faculty/edit/<?php echo $faculty['`id`']?>">Редагувати</a></span>&nbsp&nbsp&nbsp&nbsp&nbsp
	<span><a class="btn btn-mini" href="<?php echo url::base();?>faculty/delete/<?php echo $faculty['`id`']?>">Видалити</a></span></p>
<?php endif;?>
