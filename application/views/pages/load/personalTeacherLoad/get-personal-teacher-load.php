<h1>Персональне навантаження викладача</h1>
<form action="<?php echo url::base()?>load/get-personal-teacher-load/view" method="post">
    <?php echo Form::label('tid', 'Викладач'); ?>
    <?php echo Form::select('tid', $teachers,0, array('id'=>'teacher_id')); ?>
<div class="error">
	<?php // echo Arr::get($errors, 'username'); ?>
</div>
     <?php echo Form::label('date1', 'Початок семестру'); ?>
    <input type="text" class="datepicker" name="date1" value="2009-09-01"/>
    
     <?php echo Form::label('date2', 'Кынець семестру'); ?>
    <input type="text" class="datepicker" name="date2" value="2010-05-24"/>
    <input type="submit" value="Персональне навантаження викладача"/>
</form>

<!-- load datepicker -->
<link href="<?php echo URL::base() ?>public/datepicker/css/datepicker.css" rel="stylesheet" media="screen">  
 <script src="<?php echo URL::base() ?>public/datepicker/js/bootstrap-datepicker.js"></script>
  
 <script>
 $('.datepicker').datepicker({format: 'yyyy-mm-dd'})
 </script>
<!--  end load -->
