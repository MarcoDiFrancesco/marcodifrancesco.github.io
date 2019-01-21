<?php
/* Smarty version 3.1.30, created on 2018-12-10 18:22:32
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/login_registration.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0ea0d8565f88_50799557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8366fc14b8f55cd6b0e9a63bd3bb09562dc90d9e' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/login_registration.html',
      1 => 1544035371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ea0d8565f88_50799557 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Admin: Settings"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
FR.pluginsInfo = <?php echo $_smarty_tpl->tpl_vars['app']->value['pluginsInfo'];?>
;
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
FR.roles = <?php echo $_smarty_tpl->tpl_vars['app']->value['roles'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_login_registration.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}
