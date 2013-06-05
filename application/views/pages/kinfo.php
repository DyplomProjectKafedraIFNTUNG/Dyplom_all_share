<h4>Профіль</h4>

<table class="table table-bordered">
        <tr>   
                <td><img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height:120px;" src="<?php echo url::base();?>/public/img/kafedra/<?php echo $kafedra['pic'];?>">
        </tr>
	<tr>
		<td><?php echo $kafedra['kname']; ?></td> 
	</tr>
	<tr>
		<td><?php  echo $kafedra['fname']; ?></td>  
	</tr>
		
</table>

<?php if(in_array('admin',$roles)): ?>		
		<a class="btn btn-mini" href="<?php echo url::base();?>kafedra/edit/<?php echo $kafedra['id'] ?>"><i class="icon-pencil"></i>Редагувати</a>
		<a class="btn btn-mini" href="<?php echo url::base();?>kafedra/delete/<?php echo $kafedra['id']?>"><i class="icon-remove"></i>Видалити</a>
<?php endif;?>




