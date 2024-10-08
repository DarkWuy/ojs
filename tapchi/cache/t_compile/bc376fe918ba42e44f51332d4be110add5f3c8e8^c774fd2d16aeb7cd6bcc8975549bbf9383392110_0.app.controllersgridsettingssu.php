<?php
/* Smarty version 4.1.0, created on 2023-05-12 16:29:49
  from 'app:controllersgridsettingssu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_645e4d5de88652_91257009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c774fd2d16aeb7cd6bcc8975549bbf9383392110' => 
    array (
      0 => 'app:controllersgridsettingssu',
      1 => 1675470469,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
    'app:controllers/notification/inPlaceNotification.tpl' => 1,
  ),
),false)) {
function content_645e4d5de88652_91257009 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	$(function() {
		// Attach the form handler.
		$('#editSubmissionChecklistForm').pkpHandler('$.pkp.controllers.form.AjaxFormHandler');
	});
<?php echo '</script'; ?>
>

<form class="pkp_form" id="editSubmissionChecklistForm" method="post" action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.settings.submissionChecklist.SubmissionChecklistGridHandler",'op'=>"updateItem"),$_smarty_tpl ) );?>
">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['csrf'][0], array( array(),$_smarty_tpl ) );?>


<?php $_smarty_tpl->_subTemplateRender("app:controllers/notification/inPlaceNotification.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('notificationId'=>"submissionChecklistFormNotification"), 0, false);
?>


<?php $_block_plugin1 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin1, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"checklist"));
$_block_repeat=true;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"checklist"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array('title'=>"grid.submissionChecklist.column.checklistItem",'required'=>"true",'for'=>"checklistItem"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"grid.submissionChecklist.column.checklistItem",'required'=>"true",'for'=>"checklistItem"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvElement'][0], array( array('type'=>"textarea",'multilingual'=>"true",'name'=>"checklistItem",'id'=>"checklistItem",'value'=>$_smarty_tpl->tpl_vars['checklistItem']->value,'required'=>"true"),$_smarty_tpl ) );?>

	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormSection(array('title'=>"grid.submissionChecklist.column.checklistItem",'required'=>"true",'for'=>"checklistItem"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
$_block_repeat=false;
echo $_block_plugin1->smartyFBVFormArea(array('id'=>"checklist"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
if ($_smarty_tpl->tpl_vars['gridId']->value != null) {?>
	<input type="hidden" name="gridId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridId']->value ));?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['rowId']->value != null) {?>
	<input type="hidden" name="rowId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rowId']->value ));?>
" />
<?php }
if ($_smarty_tpl->tpl_vars['submissionChecklistId']->value != null) {?>
	<input type="hidden" name="submissionChecklistId" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['submissionChecklistId']->value ));?>
" />
<?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['fbvFormButtons'][0], array( array('submitText'=>"common.save"),$_smarty_tpl ) );?>

</form>
<?php }
}
