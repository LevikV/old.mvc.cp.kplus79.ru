<?php if ($works) : ?>
        <h2><?=$works['joblist_id'];?></h2>
        <p><?=$works['count'];?></p>
    <?php else: ?>
    <h2>Таблица работ пуста!</h2>
<?php endif; ?>
<?php
    $timenow = time();
    $d = getdate();
    switch ($d['weekday']){
        case 0:
            $timelastweek = $timenow - 13 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            echo '</br>';
            echo $d['weekday'];
            break;
        case 1:
            $timelastweek = $timenow - 7 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
        case 2:
            $timelastweek = $timenow - 8 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
        case 3:
            $timelastweek = $timenow - 9 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
        case 4:
            $timelastweek = $timenow - 10 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
        case 5:
            $timelastweek = $timenow - 11 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
        case 6:
            $timelastweek = $timenow - 12 * 86400;
            $datelastweek = getdate($timelastweek);
            echo "Дата начала прошлой недели: " . $datelastweek['mday'] . "-" . $datelastweek['mon'] . "-" . $datelastweek['year'];
            break;
    }
    //foreach ($d as $key => $val) {
      //  echo $key;
      //  echo "</br>";
      //  echo $val;
      //  echo "</br>";
    //}
?>
