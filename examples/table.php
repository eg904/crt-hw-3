<?php

use App\Tags\TableClass;
use App\Tags\TdClass;
use App\Tags\TrClass;

require_once __DIR__ . '/../vendor/autoload.php';

$table = new TableClass('left');
$table->setId('center')->setAlign('center')->setBgcolor('#ffff00');

$inner = '';
for ($i = 0; $i < 5; $i++) {
    $tr = new TrClass('row' . $i);
    $row = '';
    for ($j = 0; $j <= 5; $j++) {
        $row .= (new TdClass('', 'class'))->setAlign('center')->getView(random_int(0, 100));
    }
    $inner .= $tr->getView($row);
    $tr->setValign('middle')->setBgcolor('#0000ff');
}

echo $table->getView($inner);