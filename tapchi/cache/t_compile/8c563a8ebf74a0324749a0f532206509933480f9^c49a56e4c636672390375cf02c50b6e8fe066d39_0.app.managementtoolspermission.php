<?php
/* Smarty version 4.1.0, created on 2023-04-25 17:11:00
  from 'app:managementtoolspermission' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6447ed84d70ae1_03718794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c49a56e4c636672390375cf02c50b6e8fe066d39' => 
    array (
      0 => 'app:managementtoolspermission',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6447ed84d70ae1_03718794 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
$(function() {
	// Attach the form handler.
	$('#resetPermissionsForm').pkpHandler(
		'$.pkp.controllers.form.AjaxFormHandler',
		{
			confirmText: <?php echo json_encode(call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.confirm"),$_smarty_tpl ) ));?>
,
		}
	);
});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="resetPermissionsForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"management",'op'=>"tools",'path'=>"resetPermissions"),$_smarty_tpl ) );?>
">
	<div class="pkp_page_content pkp_page_permissions">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions"),$_smarty_tpl ) );?>
</h3>
		<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.resetPermissions.description"),$_smarty_tpl ) );?>
</p>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"submit",'id'=>"resetPermissionsFormButton",'label'=>"manager.setup.resetPermissions"),$_smarty_tpl ) );?>

	</div>
</form>
<?php }
}
