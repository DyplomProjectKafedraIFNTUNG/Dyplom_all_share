<h1>Семестрове навантаження</h1>
<?php //var_dump($load);?>
<?php if(!empty($load)): ?>

<h3>Форма навчання: <?php echo $form; ?></h3>
<h3>Семестр: <?php echo $semestr; ?></h3>
<table class="table table-bordered">
    <tr>
        <td><h6>Предмет</h6></td>
        <td><h6>Група</h6></td>
        <td><h6>Підгрупа</h6></td>
        <td><h6>Лектор</h6></td>
        <!--<td><h6>Лаборант</h6></td>-->
        <!--<td><h6>Практик</h6></td>-->
        <td><h6>Лек</h6></td>
        <td><h6>Лек ауд 1</h6></td>
        <td><h6>Лек ауд 2</h6></td>
        <td><h6>Лаб</h6></td>
        <td><h6>Лаб ауд 1</h6></td>
        <td><h6>Лаб ауд 2</h6></td>
        <td><h6>Практ</h6></td>
        <td><h6>Практ ауд 1</h6></td>
        <td><h6>Практ ауд 2</h6></td>
    </tr>
    <?php foreach ($load as $row):?>
    <tr>
        <td><h6><?php $normdata = explode(' ',$row['predmet']); echo $normdata[0] ?></h6></td>
        <td><h6><?php echo $row['grpStud'] ?></h6></td>
        <td><h6><?php echo $row['subGrp'] ?></h6></td>
        <td><h6><?php echo $row['Lector'] ?></h6></td>
        <!--<td><h6><?php // echo $row['Laborant'] ?></h6></td>-->
        <!--<td><h6><?php // echo $row['Praktyk'] ?></h6></td>-->
        <td><h6><?php echo $row['Lec'] ?></h6></td>
        <td><h6><?php echo $row['LecAud1'] ?></h6></td>
        <td><h6><?php echo $row['LecAud2'] ?></h6></td>
        <td><h6><?php echo $row['Lab'] ?></h6></td>
        <td><h6><?php echo $row['LabAud1'] ?></h6></td>
        <td><h6><?php echo $row['LabAud2'] ?></h6></td>
        <td><h6><?php echo $row['Pract'] ?></h6></td>
        <td><h6><?php echo $row['PractAud1'] ?></h6></td>
        <td><h6><?php echo $row['PractAud2'] ?></h6></td>       
    </tr>
    <?php endforeach; ?>
</table>
<?php else: ?>
Немає даних
<?php endif; ?>
<a href="<?php echo  url::base() ?>load/time">Новий звіт</a>

