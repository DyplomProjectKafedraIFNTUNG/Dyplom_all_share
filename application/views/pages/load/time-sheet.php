<h1>Вибір навантаження для складання розкладу</h1>

<form method="post" action="<?php echo url::base()?>load/time/view">
    <?php echo Form::label('kid', 'Кафедра'); ?>
<?php //var_dump($kafedras); ?>
<?php echo Form::select('kid', $kafedras,0, array('id'=>'kafedra')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
    
    
    <?php echo Form::label('sfid', 'Форма навчання'); ?>
    <?php echo Form::select('sfid', array(1=>"Денна",2=>"Заочна"),0, array('id'=>'study_form')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
    
     <?php echo Form::label('date1', 'Початок семестру'); ?>
    <input id="date1" type="text" class="datepicker" name="date1" value="2009-09-01"/>
     <?php echo Form::label('date2', 'Кінець семестру'); ?>
    
    <input id="date2" type="text" class="datepicker" name="date2" value="2010-05-24"/>
    <br/>
    <input class="btn" type="submit" value="Отримати навантаження для складання розкладу"/>
    
</form>



<!-- load datepicker -->
<link href="<?php echo URL::base() ?>public/datepicker/css/datepicker.css" rel="stylesheet" media="screen">  
 <script src="<?php echo URL::base() ?>public/datepicker/js/bootstrap-datepicker.js"></script>
  
 <script>
 $('.datepicker').datepicker({format: 'yyyy-mm-dd'})
 </script>
<!--  end load -->