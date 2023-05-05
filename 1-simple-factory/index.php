<?php

use SimpleFactory\NameFactory;

require_once 'Namer.php';
require_once 'FirstFirst.php';
require_once 'LastFirst.php';
require_once 'NameFactory.php';

$nameFactory = new NameFactory();

$namer = $nameFactory->getName('first');
echo $namer->getFrname();

$namer = $nameFactory->getName('last');
echo $namer->getLname();