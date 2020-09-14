<?php if ($works) : ?>
        <h2><?=$works['joblist_id'];?></h2>
        <p><?=$works['count'];?></p>
    <?php else: ?>
    <h2>Таблица работ пуста!</h2>
<?php endif; ?>