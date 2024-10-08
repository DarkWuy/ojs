<?php
/* Smarty version 4.1.0, created on 2023-04-30 18:13:47
  from 'plugins-1-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644e93bb65bda2_18310752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ee8d5a55384fc9739a556ef233a4dba336bcc76' => 
    array (
      0 => 'plugins-1-plugins-blocks-makeSubmission-blocks-makeSubmission:block.tpl',
      1 => 1681396410,
      2 => 'plugins-1-plugins-blocks-makeSubmission-blocks-makeSubmission',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644e93bb65bda2_18310752 (Smarty_Internal_Template $_smarty_tpl) {
?> 
<li>
	<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_PAGE') ? constant('ROUTE_PAGE') : null),'page'=>"about",'op'=>"submissions"),$_smarty_tpl ) );?>
" class="font-monospace">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.block.makeSubmission.linkLabel"),$_smarty_tpl ) );?>

	</a>
</li>
<?php }
}
