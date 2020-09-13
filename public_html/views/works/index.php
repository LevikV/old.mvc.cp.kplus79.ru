<?php if ($works) : ?>
    <?php foreach ($works as $work): ?>
        <h2><?=$work['joblist_id'];?></h2>
        <p><?=$work['price'];?></p>
    <?php endforeach; ?>
<?php else: ?>
    <h2>Таблица работ пуста!</h2>
<?php endif; ?>