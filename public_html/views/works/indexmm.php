<div class="container">
    <div class="row text-center">
        <div class="col">
            <h4>Работы за предидущую неделю</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table-hover raz table-striped text-center">
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
                        <th><?php if (isset($jobCountLW['1'])) {echo $jobCountLW['1'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['2'])) {echo $jobCountLW['2'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['3'])) {echo $jobCountLW['3'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['4'])) {echo $jobCountLW['4'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['5'])) {echo $jobCountLW['5'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['6'])) {echo $jobCountLW['6'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['14'])) {echo $jobCountLW['14'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['15'])) {echo $jobCountLW['15'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['7'])) {echo $jobCountLW['7'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['8'])) {echo $jobCountLW['8'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['9'])) {echo $jobCountLW['9'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['10'])) {echo $jobCountLW['10'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['11'])) {echo $jobCountLW['11'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['12'])) {echo $jobCountLW['12'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountLW['13'])) {echo $jobCountLW['13'];} else {echo '0';} ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row text-center">
        <div class="col">
            <h4>Работы за текущую неделю</h4>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div>
                <table class="table-hover raz table-striped text-center">
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
                    <?php foreach ($worksCurrentWeek as $key => $val) {?>
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
                        <th><?php if (isset($jobCountCW['1'])) {echo $jobCountCW['1'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['2'])) {echo $jobCountCW['2'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['3'])) {echo $jobCountCW['3'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['4'])) {echo $jobCountCW['4'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['5'])) {echo $jobCountCW['5'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['6'])) {echo $jobCountCW['6'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['14'])) {echo $jobCountCW['14'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['15'])) {echo $jobCountCW['15'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['7'])) {echo $jobCountCW['7'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['8'])) {echo $jobCountCW['8'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['9'])) {echo $jobCountCW['9'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['10'])) {echo $jobCountCW['10'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['11'])) {echo $jobCountCW['11'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['12'])) {echo $jobCountCW['12'];} else {echo '0';} ?></th>
                        <th><?php if (isset($jobCountCW['13'])) {echo $jobCountCW['13'];} else {echo '0';} ?></th>
                    </tr>
                    <tr>
                        <td colspan="16">Добавить новую запись</td>
                    </tr>
                    <tr>
                        <td><input type="date"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                        <td><input type="number"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>