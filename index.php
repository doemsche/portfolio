<?php
require('Smarty.class.php');
$smarty = new Smarty;

$smarty->assign("page_title","Portfolio");
$smarty->assign("css_namespace","index");
$smarty->assign("image_path","_resources/img/");
$smarty->display('index.tpl');

