<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:22:11
  from 'app:controllersnotificationin' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449f873380794_71669534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd284d11112cd09c29ccc9c682707cfeacb1cd94' => 
    array (
      0 => 'app:controllersnotificationin',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/notificationOptions.tpl' => 1,
  ),
),false)) {
function content_6449f873380794_71669534 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	$(function() {
		// Attach the form handler.
		$('#<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notificationId']->value,'javascript' ));?>
').pkpHandler('$.pkp.controllers.NotificationHandler',
		{
			<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/notificationOptions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		});
	});
<?php echo '</script'; ?>
>
<div id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['notificationId']->value ));?>
" class="pkp_notification <?php echo $_smarty_tpl->tpl_vars['notificationStyleClass']->value;?>
"></div>
<?php }
}
