<?php 
header("Content-Type: text/html; charset=utf-8");

echo "<h3>Факультети</h3>";?>
<?php foreach($fac as $val): ?>

<div class="thumbnail">
	<img alt="160x120" data-src="holder.js/160x120" style="width: 160px; height:120px;" src="<?php echo url::base();?>public/img/faculty/<?php echo $val['pic'];?>">
	<div class="caption">
		<h6><?php echo "$val[name]" ?></h6>
		<?php if(in_array('admin',$roles)): ?>		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a class="btn btn-small" title="Редагувати" href="<?php echo url::base();?>faculty/edit/<?php echo $val['id']?>"><i class="icon-pencil"></i></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a class="btn btn-small" title="Видалити" href="<?php echo url::base();?>faculty/delete/<?php echo $val['id']?>"><i class="icon-remove"></i></a>
		<?php endif;?>
		</br></br><p><a class="btn btn-large btn-block" href="<?php echo url::base();?>faculty/finfo/<?php echo $val['id'];?>">Детальніше</a></p>
	</div>
</div>
<?php endforeach; ?>
<?php if(in_array('admin',$roles)):?>
    <a href="<?php echo url::base();?>faculty/create"><div class="thumbnail"><img src="<?php echo url::base();?>public/img/addplus4.png" alt="Додати" title="Додати"></div></a>
<?php endif; ?>   
    <script src="<?php echo url::base()?>public/js/faculty/f.js"></script>
    <!-- dialog -->
    <div style="display: none;" id="dialog-confirm" title="Empty the recycle bin?">
		<p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Факультет буде видалено назавжди. Ви впевнені</p>
	</div>
    
    <!-- include js -->
    
        
    