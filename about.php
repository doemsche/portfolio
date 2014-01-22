<?php
require('../libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("page_title","About me");
$smarty->assign("css_namespace","about");
$smarty->assign("image_path","_resources/img/");
$smarty->display('about.tpl');
?>
