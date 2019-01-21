<?php
/* Smarty version 3.1.30, created on 2018-12-05 19:56:47
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/default/html/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c081f6fd07e72_26455245',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1bd673519b9815a4d9496b8f576fd50adfc4e5c' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/default/html/default.html',
      1 => 1544035317,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c081f6fd07e72_26455245 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title><?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['app_title'];?>
 :: <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array('s'=>"Main Interface"));
$_block_repeat1=true;
echo $_block_plugin1(array('s'=>"Main Interface"), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Control Panel<?php $_block_repeat1=false;
echo $_block_plugin1(array('s'=>"Main Interface"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</title>
	<link rel="stylesheet" href="css/ext.php?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&theme=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['ui_theme']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>" />
	<link rel="stylesheet" href="css/cpanel.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
	<link rel="stylesheet" href="css/ext-ux/StatusBar.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
    <style>.ext-el-mask { background-color: white; }</style>
</head>
<body>
<div id="loadMsg"><div><?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Loading...<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div></div>
<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['pushercom_enable']) {?>
	<?php echo '<script'; ?>
 src="https://js.pusher.com/4.1/pusher.min.js"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 src="js/min.php?extjs=1<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/min.php?cpanel=1&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&sec=Admin&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['app']->value['user']['isSuperUser']) {?>
	<?php echo '<script'; ?>
 src="https://www.filerun.com/version_check/<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);
if ($_smarty_tpl->tpl_vars['app']->value['isFree']) {?>/f<?php }?>" defer><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>
FR.URLRoot = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
';
FR.iconURL = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
/images/icons/';
FR.system = <?php echo $_smarty_tpl->tpl_vars['app']->value['system'];?>
;
FR.user = <?php echo $_smarty_tpl->tpl_vars['app']->value['adminInfo'];?>
;
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
