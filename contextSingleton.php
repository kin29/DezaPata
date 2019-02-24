<?php

require __DIR__ . '/vendor/autoload.php';

use DP\Singleton\Singleton;

//echo "Singletonクラスを普通にnewしてみる。\n";
//new Singleton(); //たぶんおこられる。

echo "getInstanceしてみる(instance1)\n";
$instance1 = Singleton::getInstance();
echo "もう一度、getInstanceしてみる(instance2)\n";
$instance2 = Singleton::getInstance();
echo "２回目のgetInstanceはインスタンス生成を行わないため、constructを通らないはず\n";
echo "(instance1 === instance2)なのか確認\n";
echo ($instance1 === $instance2) . "\n";
