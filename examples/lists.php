<?php
require_once __DIR__ . '/../vendor/autoload.php';

$menu =  new \App\Tags\MenuClass('');
$menu->setType('list');

$array = [
    'Русская кухня. Уха бурлацкая',
    'Украинская кухня. Вареники',
    'Молдавская кухня. Паприкаш',
    'Кавказская кухня. Суп-харчо',
    'Прибалтийская кухня. Вертиняй'
    ];

$listElements = '';

foreach ($array as $item) {
    $listElements .= (new \App\Tags\LiClass('', 'list-item'))->getView($item);
}
echo $menu->getView($listElements);