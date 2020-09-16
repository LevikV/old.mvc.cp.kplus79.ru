<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="table-responsive">
                <table class="table-hover">
                    <tr>
                        <th></th>
                        <th colspan="6">Картриджи</th>
                        <th colspan="2">Оборудование</th>
                        <th colspan="2">Заказы</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    <tr>
                        <th></th>
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
                    <tr>
                        <td>11</td>
                        <td>22</td>
                        <td>33</td>
                        <td>44</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>



<?php if ($works) : ?>
    <h2><?//=$works['joblist_id'];?></h2>
    <p><?//=$works['count'];?></p>
<?php else: ?>
    <h2>Таблица работ пуста!</h2>
<?php endif; ?>
<?php
echo $datelastweek;
//foreach ($d as $key => $val) {
//  echo $key;
//  echo "</br>";
//  echo $val;
//  echo "</br>";
//}
?>
