<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="table-responsive text-center">
                <table class="table-hover raz table-striped">
                    <tr>
                        <th rowspan="2">Дата</th>
                        <th colspan="6">Картриджи</th>
                        <th colspan="2">Оборудование</th>
                        <th colspan="2">Заказы</th>
                        <th colspan="5"></th>
                    </tr>
                    <tr>
                        <th>Принято</th>
                        <th>Брак/гар.</th>
                        <th>Согласов.</th>
                        <th>Выдано</th>
                        <th>Турбо</th>
                        <th>Запаков.</th>
                        <th>Принято</th>
                        <th>Выдано</th>
                        <th>Принято</th>
                        <th>Выдано</th>
                        <th>Продажи</th>
                        <th>Зад.делег.</th>
                        <th>Развозка</th>
                        <th>Резерв</th>
                        <th>Гаран.устр.</th>
                    </tr>
                    <?php foreach ($worksLastWeek as $key => $val) {?>
                    <tr>
                        <td><?=$val['date']?></td>
                        <td><?php if (isset($val['1'])) {echo $val['1'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['2'])) {echo $val['2'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['3'])) {echo $val['3'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['4'])) {echo $val['4'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['5'])) {echo $val['5'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['6'])) {echo $val['6'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['14'])) {echo $val['14'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['15'])) {echo $val['15'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['7'])) {echo $val['7'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['8'])) {echo $val['8'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['9'])) {echo $val['9'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['10'])) {echo $val['10'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['11'])) {echo $val['11'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['12'])) {echo $val['12'];} else {echo '0';} ?></td>
                        <td><?php if (isset($val['13'])) {echo $val['13'];} else {echo '0';} ?></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <th>Итого</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                        <th>0</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php

//foreach ($d as $key => $val) {
//  echo $key;
//  echo "</br>";
//  echo $val;
//  echo "</br>";
//}
?>
