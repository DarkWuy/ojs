<?php
/* Smarty version 4.1.0, created on 2023-04-25 16:48:47
  from 'plugins-1-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447e84f9c5119_87517019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380aaac34c3f816e81bbe10ec60be9f9fa511718' => 
    array (
      0 => 'plugins-1-plugins-blocks-languageToggle-blocks-languageToggle:block.tpl',
      1 => 1681396410,
      2 => 'plugins-1-plugins-blocks-languageToggle-blocks-languageToggle',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447e84f9c5119_87517019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
if ($_smarty_tpl->tpl_vars['enableLanguageToggle']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languageToggleLocales']->value, 'localeName', false, 'localeKey');
$_smarty_tpl->tpl_vars['localeName']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['localeKey']->value => $_smarty_tpl->tpl_vars['localeName']->value) {
$_smarty_tpl->tpl_vars['localeName']->do_else = false;
?>
		<li class="locale_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['localeKey']->value ));
if ($_smarty_tpl->tpl_vars['localeKey']->value == $_smarty_tpl->tpl_vars['currentLocale']->value) {?> current<?php }?>" lang="<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['localeKey']->value,"_","-");?>
">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"user",'op'=>"setLocale",'path'=>$_smarty_tpl->tpl_vars['localeKey']->value,'source'=>$_SERVER['REQUEST_URI']),$_smarty_tpl ) );?>
" class="font-monospace">
				<?php echo $_smarty_tpl->tpl_vars['localeName']->value;?>

			</a>
		</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
