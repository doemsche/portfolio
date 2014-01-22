<?php
require('../libs/Smarty.class.php');
$smarty = new Smarty;
$smarty->assign("page_title","Contact");
$smarty->assign("css_namespace","contact");
$smarty->assign("image_path","_resources/img/");
$smarty->display('contact.tpl');
?>
