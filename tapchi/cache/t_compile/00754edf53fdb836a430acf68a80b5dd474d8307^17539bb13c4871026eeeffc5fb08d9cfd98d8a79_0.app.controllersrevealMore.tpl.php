<?php
/* Smarty version 4.1.0, created on 2023-06-24 08:16:40
  from 'app:controllersrevealMore.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_64968a48b52566_19608169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '17539bb13c4871026eeeffc5fb08d9cfd98d8a79' => 
    array (
      0 => 'app:controllersrevealMore.tpl',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64968a48b52566_19608169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('id', uniqid(10));
if (!$_smarty_tpl->tpl_vars['height']->value) {?>
	<?php $_smarty_tpl->_assignInScope('height', 192);
}
echo '<script'; ?>
>
	// Initialise JS handler.
	$(function() {
		$('#revealMore-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').pkpHandler(
			'$.pkp.controllers.RevealMoreHandler',
			{
				height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>

			}
		);
	});
<?php echo '</script'; ?>
>
<div id="revealMore-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="pkp_controllers_revealMore">
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

	<div class="reveal_more_wrapper">
		<button href="#" class="revealMoreButton">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.readMore"),$_smarty_tpl ) );?>

		</button>
	</div>
</div>
<?php }
}
