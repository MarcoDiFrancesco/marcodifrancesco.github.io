<?php
/* Smarty version 3.1.30, created on 2018-12-05 19:56:46
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/default/html/pages/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c081f6e907172_04721103',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3683a0066d5210510d4dbe8612a6fbd8d28c7d09' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/default/html/pages/index.html',
      1 => 1544035374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customizables/include.html' => 1,
  ),
),false)) {
function content_5c081f6e907172_04721103 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Main Interface"),$_smarty_tpl);?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title><?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title']);?>
</title>
<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['enable_favicon_ico']) {?>
<link rel="icon" type="image/x-icon" href="favicon.ico" />
<?php } else { ?>
<link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgo=" />
<?php }?>
<link rel="stylesheet" href="css/style.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
<link rel="stylesheet" href="css/ext.php?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&theme=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['ui_theme']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>" />
<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_css_url']) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_css_url'];?>
?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" /><?php }?>
<style>
	.tmbItem { height: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['thumbnails_size'];?>
px;width: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['thumbnails_size'];?>
px; }
	.tmbInner { height: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['thumbnails_size']-30;?>
px;width: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['thumbnails_size'];?>
px; }
	.tmbItem .thumbFolder { width: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['thumbnails_size'];?>
px; }
	#FR-Grid-Panel .photoMode .tmbItem { height: <?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['ui_photos_thumbnail_size'];?>
px; }
	#FR-Grid-Panel .photoMode .x-grid3-body { grid-template-columns: repeat(auto-fill, minmax(<?php echo $_smarty_tpl->tpl_vars['app']->value['settings']['ui_photos_thumbnail_size'];?>
px, 1fr)); }
</style>
</head>
<body id="theBODY">
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

<?php echo '<script'; ?>
 src="js/min.php?extjs=1<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/min.php?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);
if ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['developmentMode']) {?>&debug=1<?php }?>"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&page=custom_actions.js&language=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&page=translation.js&sec=Main%20Interface&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&page=meta.js&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&uid=<?php echo $_smarty_tpl->tpl_vars['app']->value['user']['info']['id'];?>
"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['pushercom_enable'] && !$_smarty_tpl->tpl_vars['app']->value['settings']['disable_file_history']) {
echo '<script'; ?>
 src="https://js.pusher.com/4.1/pusher.min.js"><?php echo '</script'; ?>
>
<?php }
if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_js_url']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_js_url'];?>
?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
>
	FR.language = '<?php echo $_smarty_tpl->tpl_vars['app']->value['language'];?>
';
	FR.homeFolderCfg = <?php echo $_smarty_tpl->tpl_vars['app']->value['homeFolderCfg'];?>
;
	var URLRoot = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
';
	var Settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['UISettings'];?>
;
	var User = <?php echo $_smarty_tpl->tpl_vars['app']->value['UIUser'];?>
;
	var Sharing = <?php echo $_smarty_tpl->tpl_vars['app']->value['usersWithShares'];?>
;
	var AnonShares = <?php echo $_smarty_tpl->tpl_vars['app']->value['anonShares'];?>
;
<?php echo '</script'; ?>
>

	<?php $_smarty_tpl->_subTemplateRender("file:customizables/include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"index"), 0, false);
?>

	<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes']) {
echo $_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes'];
}?>
</body>
</html><?php }
}
