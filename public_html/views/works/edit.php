<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <?php
                echo "Страница редактирования записи";
                echo "<br>";
                echo $_GET['date'];
                echo "<br>";
                echo $date;
            ?>
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
                    <?php foreach ($worksLCWeek as $key => $val) {?>
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
                    <form action="/" method="get">
                        <input type="hidden" name="route" value="works/add">

                        <tr>
                            <th colspan="16"><button type="submit" class="btn-link" style="border: none;">Изменить запись</button> </th>
                        </tr>
                        <tr>
                            <td><input type="date" name="date" value="<?php if (isset($val['date'])) {echo $val['date'];} ?>" class="inputt" style="width: 70px"></td>
                            <td><input type="number" name="jobID_1" value="<?php if (isset($val['1'])) {echo $val['1'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_2" value="<?php if (isset($val['2'])) {echo $val['2'];} else {echo '0';} ?>" class="text-center inputt" style="width: 55px"></td>
                            <td><input type="number" name="jobID_3" value="<?php if (isset($val['3'])) {echo $val['3'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_4" value="<?php if (isset($val['4'])) {echo $val['4'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_5" value="<?php if (isset($val['5'])) {echo $val['5'];} else {echo '0';} ?>" class="text-center inputt" style="width: 35px"></td>
                            <td><input type="number" name="jobID_6" value="<?php if (isset($val['6'])) {echo $val['6'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_14" value="<?php if (isset($val['14'])) {echo $val['14'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_15" value="<?php if (isset($val['15'])) {echo $val['15'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_7" value="<?php if (isset($val['7'])) {echo $val['7'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_8" value="<?php if (isset($val['8'])) {echo $val['8'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_9" value="<?php if (isset($val['9'])) {echo $val['9'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_10" value="<?php if (isset($val['10'])) {echo $val['10'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_11" value="<?php if (isset($val['11'])) {echo $val['11'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_12" value="<?php if (isset($val['12'])) {echo $val['12'];} else {echo '0';} ?>" class="text-center inputt"></td>
                            <td><input type="number" name="jobID_13" value="<?php if (isset($val['13'])) {echo $val['13'];} else {echo '0';} ?>" class="text-center inputt"></td>
                        </tr>
                    </form>
                </table>
            </div>
        </div>
    </div>
</div>
