<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 28/01/2019
 * Time: 23:07
 */
include "ArrayList.php";

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);
$listInteger->add(4);
$listInteger->add(7);

echo $listInteger->get(4);
