<?php
/* Smarty version 4.1.0, created on 2023-05-12 16:09:40
  from 'app:controllersinformationCen' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e48a43907e4_85181431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8582f6b6ca3d700207680af8b426610d8bed0414' => 
    array (
      0 => 'app:controllersinformationCen',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/extrasOnDemand.tpl' => 1,
  ),
),false)) {
function content_645e48a43907e4_85181431 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the Notes handler.
	$(function() {
		$('#informationCenterNotes').pkpHandler(
			'$.pkp.controllers.informationCenter.NotesHandler' );
	});
<?php echo '</script'; ?>
>

<div id="informationCenterNotes">

	<?php echo $_smarty_tpl->tpl_vars['notesList']->value;?>


	<?php if ($_smarty_tpl->tpl_vars['showEarlierEntries']->value) {?>
		<?php $_smarty_tpl->_subTemplateRender("app:controllers/extrasOnDemand.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('id'=>"showPastNotesLink",'moreDetailsText'=>"informationCenter.pastNotes",'lessDetailsText'=>"informationCenter.pastNotes",'extraContent'=>$_smarty_tpl->tpl_vars['pastNotesList']->value), 0, false);
?>
	<?php }?>

	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['newNoteFormTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>
<?php }
}
