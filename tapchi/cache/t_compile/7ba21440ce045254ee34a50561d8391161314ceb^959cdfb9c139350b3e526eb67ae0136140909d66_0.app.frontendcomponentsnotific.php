<?php
/* Smarty version 4.1.0, created on 2023-04-27 06:21:33
  from 'app:frontendcomponentsnotific' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6449f84d9e1c86_48795549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '959cdfb9c139350b3e526eb67ae0136140909d66' => 
    array (
      0 => 'app:frontendcomponentsnotific',
      1 => 1681396410,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6449f84d9e1c86_48795549 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\ojs\\lib\\pkp\\lib\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<div class="cmp_notification <?php echo smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['type']->value )),' ','_');?>
 note note-warning">
	<?php if ($_smarty_tpl->tpl_vars['messageKey']->value) {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>$_smarty_tpl->tpl_vars['messageKey']->value),$_smarty_tpl ) );?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

	<?php }?>
</div>
<?php }
}
