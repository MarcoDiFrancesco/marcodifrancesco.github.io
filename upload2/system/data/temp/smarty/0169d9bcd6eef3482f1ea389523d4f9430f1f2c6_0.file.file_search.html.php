<?php
/* Smarty version 3.1.30, created on 2018-12-10 18:22:28
  from "/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/file_search.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5c0ea0d483bc45_63878562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0169d9bcd6eef3482f1ea389523d4f9430f1f2c6' => 
    array (
      0 => '/web/htdocs/www.marcodifrancesco.com/home/upload2/system/modules/cpanel/sections/settings/html/pages/file_search.html',
      1 => 1544035371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0ea0d483bc45_63878562 (Smarty_Internal_Template $_smarty_tpl) {
echo smarty_function_lang(array('section'=>"Admin: Settings"),$_smarty_tpl);?>

<?php echo '<script'; ?>
>
FR.settings = <?php echo $_smarty_tpl->tpl_vars['app']->value['AllSettings'];?>
;
FR.isPHP5 = <?php if ($_smarty_tpl->tpl_vars['app']->value['isPHP5']) {?>1<?php } else { ?>0<?php }?>;
FR.stats = <?php echo $_smarty_tpl->tpl_vars['app']->value['stats'];?>
;
ScriptMgr.load({ scripts:[
	'?module=fileman&section=utils&sec=Admin%3A%20Setup&lang=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['language']);?>
&v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
&page=translation.js',
	'js/cpanel/forms/settings_file_search.js?v=<?php echo \S::forURL($_smarty_tpl->tpl_vars['app']->value['settings']['currentVersion']);?>
'
]});
<?php echo '</script'; ?>
><?php }
}
