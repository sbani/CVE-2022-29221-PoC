<?php

require 'vendor/autoload.php';

$smarty = new Smarty();
$smarty->setTemplateDir('./template');
$smarty->setConfigDir('/./config');
$smarty->setCompileDir('./compile');
$smarty->setCacheDir('./cache');

$smarty->display('index.tpl');
