<?php

for ($i = 2; $i < 60; $i++) {
?>

.snowflake:nth-child(<?= $i ?>) {
    --size: <?= rand(5, 15) ?>px;

    --init-left: <?= $initLeft = rand(-10, 100) ?>%;
    --init-top: -<?= $initTop = rand(5, 100) ?>%;

    --end-left: <?= $initLeft + rand(3, 20) ?>%;

    --duration: <?= rand(300, 600) / 100 ?>s;
}

<?php
}
