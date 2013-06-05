<h1>Персональне навантаження викладача</h1>
<?php //var_dump($load); ?>
<table class="table table-bordered">
    <tr class="captions">
        <td><h6>ПІБ</h6></td>        
        <td><h6>Посада</h6></td>
        <td><h6>Кафедра</h6></td>
        
        <td><h6>Ставка</h6></td>
        <td><h6>Планове навантаження</h6></td>
        <td><h6>к-сть дипломників</h6></td>
        <td><h6>рецензція дипломного проекту</h6></td>
        <td><h6>магістерська робота</h6></td>
        <td><h6>Рецензія магістерської роботи</h6></td>
        <td><h6>ДЕК</h6></td>
        
        <!--<td><h6>Дипломне проектування обраховане</h6></td>-->
        <!--<td><h6>RecDPCalc</h6></td>-->
        <!--<td><h6>magWorkCalc</h6></td>-->
        <!--<td><h6>RecMagCalc</h6></td>-->
        <!--<td><h6>PersNavCalc</h6></td>-->

    </tr>
    <?php foreach ($load as $row): ?>
        <tr>
            <td><h6><?php echo $row['surname'] . " " . $row['name'] . " " . $row['patronimic'] ?></h6></td>
            <td><h6><?php echo $row['posada'] ?></h6></td>
            <td><h6><?php echo $row['kafedra'] ?></h6></td>
            <td><h6><?php echo $row['stavka'] ?></h6></td>
            <td><h6><?php echo $row['planove_navant'] ?></h6></td>

            <td><h6><?php echo $row['DypPro'] ?></h6></td>
            <td><h6><?php echo $row['RecDP'] ?></h6></td>
            <td><h6><?php echo $row['magWork'] ?></h6></td>
            <td><h6><?php echo $row['RecMag'] ?></h6></td>
            <td><h6><?php echo $row['DEK'] ?></h6></td>

            <!--<td><h6><?php // echo $row['DypProCalc'] ?></h6></td>-->
            <!--<td><h6><?php // echo $row['RecDPCalc'] ?></h6></td>-->
            <!--<td><h6><?php // echo $row['magWorkCalc'] ?></h6></td>-->
            <!--<td><h6><?php // echo $row['RecMagCalc'] ?></h6></td>-->
            <!--<td><h6><?php // echo $row['PersNavCalc']  ?></h6></td>-->
        </tr>
    <?php endforeach; ?>


</table>


<?php //var_dump($load);?>

