<?php
/* Smarty version 3.1.30, created on 2018-12-05 19:56:26
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/default/html/pages/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c081f5a78e8f4_85114849',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5af62d2abd080508c7b0b215e70d53ec0429354' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/fileman/sections/default/html/pages/login.html',
      1 => 1544035374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:customizables/include.html' => 1,
  ),
),false)) {
function content_5c081f5a78e8f4_85114849 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Login Page"),$_smarty_tpl);?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="application-name" content="FileRun" />
<title><?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['settings']['app_title']);?>
 :: <?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['t'][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['t'][0] : null;
if (!is_callable($_block_plugin1)) {
throw new SmartyException('block tag \'t\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('t', array());
$_block_repeat1=true;
echo $_block_plugin1(array(), null, $_smarty_tpl, $_block_repeat1);
while ($_block_repeat1) {
ob_start();
?>
Login<?php $_block_repeat1=false;
echo $_block_plugin1(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat1);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
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
<link rel="stylesheet" href="css/login.css?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" />
<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_css_url']) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_css_url'];?>
?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
" /><?php }?>
<style>
	<?php if ($_smarty_tpl->tpl_vars['app']->value['ui_bg']) {?>
	body {  background-image:url(<?php echo \S::safeHTML($_smarty_tpl->tpl_vars['app']->value['settings']['ui_login_bg']);?>
);  }
	<?php } elseif ($_smarty_tpl->tpl_vars['app']->value['ui_bg_color']) {?>
	body {  background-color: <?php echo \S::safeHTML($_smarty_tpl->tpl_vars['app']->value['ui_bg_color']);?>
;  }
	<?php }?>
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
 src="js/login.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="?module=fileman&section=utils&sec=Login%20Page&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js"><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_js_url']) {
echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app']->value['config']['app']['ui']['custom_js_url'];?>
?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
"><?php echo '</script'; ?>
><?php }?>

<?php echo '<script'; ?>
>
var URLRoot = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
';
var Settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['settingsSet'];?>
;
var prefilledUsername = '<?php if ($_smarty_tpl->tpl_vars['app']->value['get']['username']) {
echo \S::safeJS($_smarty_tpl->tpl_vars['app']->value['get']['username']);
} elseif ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['demoMode']) {?>admin<?php }?>';
var prefilledPassword = '<?php if ($_smarty_tpl->tpl_vars['app']->value['get']['password']) {
echo \S::safeJS($_smarty_tpl->tpl_vars['app']->value['get']['password']);
} elseif ($_smarty_tpl->tpl_vars['app']->value['config']['misc']['demoMode']) {?>admin<?php }?>';
var signUpURL = '<?php echo $_smarty_tpl->tpl_vars['app']->value['url']['root'];?>
/?page=register<?php if ($_smarty_tpl->tpl_vars['app']->value['get']['puid']) {?>&puid=<?php echo \S::safeJS($_smarty_tpl->tpl_vars['app']->value['get']['puid']);
}?>';
<?php echo '</script'; ?>
>
	<?php $_smarty_tpl->_subTemplateRender("file:customizables/include.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('page'=>"login"), 0, false);
?>

	<?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes']) {
echo $_smarty_tpl->tpl_vars['app']->value['settings']['tracker_codes'];
}
}
}