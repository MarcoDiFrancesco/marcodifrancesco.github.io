<?php
/* Smarty version 3.1.30, created on 2018-12-05 20:01:00
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/profile/html/default.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c08206ce85cd8_26276546',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68b9b0e009a1ef0be9d30b55ba00a4c95891f6c2' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/profile/html/default.html',
      1 => 1544035327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c08206ce85cd8_26276546 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
Account settings<?php $_block_repeat1=false;
echo $_block_plugin1(array('s'=>"Main Interface"), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</title>
    <link rel="stylesheet" href="css/ext.php?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&theme=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['ui_theme']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>" />
    <link rel="stylesheet" href="css/style.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
    <link rel="stylesheet" href="js/jquery/croppie/croppie.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
	<?php echo '<script'; ?>
 src="js/jquery/jquery.min.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery/croppie/croppie.min.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery/croppie/canvas.toBlob.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="js/jquery/croppie/exif.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/min.php?extjs=1&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/user_settings.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="?module=fileman&section=utils&sec=Account%20Settings&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js/min.php?flow=1&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        FR.URLRoot = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
';
        FR.system = <?php echo $_smarty_tpl->tpl_vars['app']->value['system_json'];?>
;
        FR.userInfo = <?php echo $_smarty_tpl->tpl_vars['app']->value['userInfo'];?>
;
        <?php if ($_smarty_tpl->tpl_vars['app']->value['system']['showApps']) {?>
        FR.apps = <?php echo $_smarty_tpl->tpl_vars['app']->value['connectedApps'];?>
;
        <?php }?>
    <?php echo '</script'; ?>
>
    <style>.ext-el-mask { background-color: white; }</style>
</head>
<body></body>
</html><?php }
}
