<h1>Основне навантаження викладача</h1>
<?php //var_dump($columns);?>
<table class="table table-bordered">
    <tr class="captions">
        <?php foreach($columns as $colname):?>
        <td><h6><?php echo $colname; ?></h6></td>
        <?php endforeach; ?>
    </tr>
    <?php foreach ($load as $oneLoadRow): ?>
    <tr>
    <?php foreach ($oneLoadRow as $value): ?>
        <td>
            <h6><?php echo $value;?></h6>
        </td>
        <?php endforeach; ?>
    </tr>
    <?php endforeach; ?>
    
    
</table>


    <?php //var_dump($load);?>

