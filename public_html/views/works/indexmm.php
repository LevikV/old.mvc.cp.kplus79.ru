<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h4>Работы за предидущую неделю</h4>
        </div>
        <div class="col-10">
            <div class="table-responsive">
                <table class="table-hover raz table-striped text-center" align="center">
                    <tr>
                        <th rowspan="2">Дата</th>
                        <th colspan="6">Картриджи</th>
                        <th colspan="2">Оборудование</th>
                        <th colspan="2">Заказы</th>
                        <th colspan="5"></th>
                    </tr>
                    <tr>
                        <th>Принято</th>
                        <th id="col_b_55">Брак/гар.</th>
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
                        <td><a href="/?route=works/edit&date=<?php echo $val['date']; ?>"><?php echo $val['date']; ?></a></td>
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
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h4>Работы за текущую неделю</h4>
        </div>
        <div class="col-10">
            <div class="table-responsive">
                <table class="table-hover raz table-striped text-center" align="center">
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
                            <td><a href="/?route=works/edit&date=<?php echo $val['date']; ?>"><?php echo $val['date']; ?></a></td>
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
                    <form action="/" method="get">
                        <input type="hidden" name="route" value="works/add">

                        <tr>
                            <th colspan="16"><button type="submit" class="btn-link" style="border: none;">Добавить новую запись</button> </th>
                        </tr>
                        <tr>
                            <td><input type="date" name="date" class="inputt" style="width: 70px"></td>
                            <td><input type="number" name="jobID_1" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_2" class="text-center inputt" style="width: 55px"></td>
                            <td><input type="number" name="jobID_3" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_4" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_5" class="text-center inputt" style="width: 35px"></td>
                            <td><input type="number" name="jobID_6" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_14" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_15" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_7" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_8" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_9" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_10" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_11" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_12" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_13" class="text-center inputt"></td>
                        </tr>
                    </form>
                </table>
            </div>
            <hr>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row vidzetBlock">
        <div class="col text-center">
            <h3>Блок с виджетами-результатами за месяц</h3>
        </div>
    </div>
</div>
