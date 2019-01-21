<?php
/* Smarty version 3.1.30, created on 2018-12-05 19:57:15
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/users/sections/cpanel/html/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c081f8b17c1c8_15425885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '473712c5c507345759d872f5cda76d28e6b81801' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/users/sections/cpanel/html/edit.html',
      1 => 1544035350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c081f8b17c1c8_15425885 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR.roles = <?php echo $_smarty_tpl->tpl_vars['app']->value['roles'];?>
;
FR.userInfo = <?php echo $_smarty_tpl->tpl_vars['app']->value['userInfo'];?>
;
FR.settings = {
	disable_file_history: <?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['disable_file_history']) {?>true<?php } else { ?>false<?php }?>
};
FR.FileRunInstallPath = '<?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['config']['path']['root']);?>
';
FR.adminHomeFolderPath = '<?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['user']['perms']['homefolder']);?>
';
FR.currentUserPerms = {
	admin_homefolder_template: <?php if ($_smarty_tpl->tpl_vars['app']->value['user']['perms']['admin_homefolder_template']) {?>true<?php } else { ?>false<?php }?>
}
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Users&calendar=1&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/edit_user.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}
