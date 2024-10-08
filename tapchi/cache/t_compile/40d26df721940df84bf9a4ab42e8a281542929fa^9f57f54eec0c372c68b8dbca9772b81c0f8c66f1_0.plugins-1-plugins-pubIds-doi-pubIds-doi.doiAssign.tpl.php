<?php
/* Smarty version 4.1.0, created on 2023-04-27 16:44:03
  from 'plugins-1-plugins-pubIds-doi-pubIds-doi:doiAssign.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_644a8a3320dc00_75415614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f57f54eec0c372c68b8dbca9772b81c0f8c66f1' => 
    array (
      0 => 'plugins-1-plugins-pubIds-doi-pubIds-doi:doiAssign.tpl',
      1 => 1675470231,
      2 => 'plugins-1-plugins-pubIds-doi-pubIds-doi',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_644a8a3320dc00_75415614 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('pubObjectType', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubObjectType($_smarty_tpl->tpl_vars['pubObject']->value));
$_smarty_tpl->_assignInScope('enableObjectDoi', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getSetting($_smarty_tpl->tpl_vars['currentContext']->value->getId(),"enable".((string)$_smarty_tpl->tpl_vars['pubObjectType']->value)."Doi"));
if ($_smarty_tpl->tpl_vars['enableObjectDoi']->value) {?>
	<?php $_block_plugin2 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormArea'][0][0] : null;
if (!is_callable(array($_block_plugin2, 'smartyFBVFormArea'))) {
throw new SmartyException('block tag \'fbvFormArea\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormArea', array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"));
$_block_repeat=true;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
	<?php if ($_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType())) {?>
		<?php $_block_plugin3 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin3, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin3->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
			<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assignDoi.assigned",'pubId'=>$_smarty_tpl->tpl_vars['pubObject']->value->getStoredPubId($_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubIdType())),$_smarty_tpl ) );?>
</p>
		<?php $_block_repeat=false;
echo $_block_plugin3->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('pubId', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getPubId($_smarty_tpl->tpl_vars['pubObject']->value));?>
		<?php if (!$_smarty_tpl->tpl_vars['canBeAssigned']->value) {?>
			<?php $_block_plugin4 = isset($_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0]) ? $_smarty_tpl->smarty->registered_plugins['block']['fbvFormSection'][0][0] : null;
if (!is_callable(array($_block_plugin4, 'smartyFBVFormSection'))) {
throw new SmartyException('block tag \'fbvFormSection\' not callable or registered');
}
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('fbvFormSection', array());
$_block_repeat=true;
echo $_block_plugin4->smartyFBVFormSection(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
				<?php if (!$_smarty_tpl->tpl_vars['pubId']->value) {?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assignDoi.emptySuffix"),$_smarty_tpl ) );?>
</p>
				<?php } else { ?>
					<p class="pkp_help"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.pubIds.doi.editor.assignDoi.pattern",'pubId'=>$_smarty_tpl->tpl_vars['pubId']->value),$_smarty_tpl ) );?>
</p>
				<?php }?>
			<?php $_block_repeat=false;
echo $_block_plugin4->smartyFBVFormSection(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
		<?php } else { ?>
			<?php $_smarty_tpl->_assignInScope('templatePath', $_smarty_tpl->tpl_vars['pubIdPlugin']->value->getTemplateResource('doiAssignCheckBox.tpl'));?>
			<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['templatePath']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pubId'=>$_smarty_tpl->tpl_vars['pubId']->value,'pubObjectType'=>$_smarty_tpl->tpl_vars['pubObjectType']->value), 0, true);
?>
		<?php }?>
	<?php }?>
	<?php $_block_repeat=false;
echo $_block_plugin2->smartyFBVFormArea(array('id'=>"pubIdDOIFormArea",'class'=>"border",'title'=>"plugins.pubIds.doi.editor.doi"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
}
