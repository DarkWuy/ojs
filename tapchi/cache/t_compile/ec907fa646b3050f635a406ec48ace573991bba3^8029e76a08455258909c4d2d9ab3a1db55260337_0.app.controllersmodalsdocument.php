<?php
/* Smarty version 4.1.0, created on 2023-05-12 16:09:51
  from 'app:controllersmodalsdocument' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e48af40a297_36220637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8029e76a08455258909c4d2d9ab3a1db55260337' => 
    array (
      0 => 'app:controllersmodalsdocument',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645e48af40a297_36220637 (Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help'][0], array( array('file'=>"settings/workflow-settings",'section'=>"publisher",'class'=>"pkp_help_modal"),$_smarty_tpl ) );?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'libraryGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.library.LibraryFileAdminGridHandler",'op'=>"fetchGrid",'canEdit'=>$_smarty_tpl->tpl_vars['canEdit']->value,'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"libraryGridDiv",'url'=>$_smarty_tpl->tpl_vars['libraryGridUrl']->value),$_smarty_tpl ) );?>

<?php }
}
