<?php
/* Smarty version 3.1.30, created on 2018-12-05 19:58:28
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/users/sections/cpanel/html/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c081fd4ae6f38_47276790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb95c51702923ea5f7c393ba4d3a6a89a180d64' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/users/sections/cpanel/html/add.html',
      1 => 1544035350,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c081fd4ae6f38_47276790 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
FR.roles = <?php echo $_smarty_tpl->tpl_vars['app']->value['roles'];?>
;
FR.FileRunInstallPath = '<?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['config']['path']['root']);?>
';
FR.adminHomeFolderPath = '<?php echo \S::forHTML($_smarty_tpl->tpl_vars['app']->value['user']['perms']['homefolder']);?>
';
FR.settings = {
	disable_file_history: <?php if ($_smarty_tpl->tpl_vars['app']->value['settings']['disable_file_history']) {?>true<?php } else { ?>false<?php }?>
};
FR.currentUserPerms = {
	admin_homefolder_template: <?php if ($_smarty_tpl->tpl_vars['app']->value['user']['perms']['admin_homefolder_template']) {?>true<?php } else { ?>false<?php }?>
}
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Users&calendar=1&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/add_user.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}
