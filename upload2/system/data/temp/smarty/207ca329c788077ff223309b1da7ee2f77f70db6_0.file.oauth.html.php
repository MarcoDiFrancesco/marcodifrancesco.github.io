<?php
/* Smarty version 3.1.30, created on 2018-12-05 20:00:30
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/oauth.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c08204e91cc55_17911572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '207ca329c788077ff223309b1da7ee2f77f70db6' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/oauth.html',
      1 => 1544035371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c08204e91cc55_17911572 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20API&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_oauth.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}
